<?php
//mostrar informacion especifica
namespace App\Controllers\Panel;

use App\Controllers\BaseController;

class Usuario_Nuevo extends BaseController
{
    //Atributos
    private $session;
    private $permitido = TRUE;

    //Constructor
    public function __construct()
    {
        //Se intancia el Acceso helper
        helper('permisos_helper');

        //instancia de la sesion
        $this->session = session();

        //Verifica si el usuario logeado cuenta con los permiso de esta area
        if (comprobar_acceso(TAREA_USUARIO_NUEVO)) {
            $this->session->tarea_actual = TAREA_USUARIO_NUEVO;
        } //end if 
        else {
            $this->permitido = FALSE;
            $this->session->modulo_permitido = FALSE;
        } //end else
    } //end constructor

    //el arreglo $datos sirve para almacenar la informacion que se va a mostrar en la vista
    private function crear_vista($nombreVista = '', $datos = array())
    {
        $datos['menu'] = crear_menu_panel('usuarios');
        return view($nombreVista, $datos);
    }

    private function fotoPerfilM($idUsuario = NULL)
    {
        $tabla_usuarios = new \App\Models\Tabla_usuarios;

        if (!empty($tabla_usuarios->imagenPerfil($idUsuario))) {
            return $tabla_usuarios->imagenPerfil($idUsuario);
        } else {
            if ($tabla_usuarios->sexoUsuario($idUsuario) == '2') {
                return MALE;
            } else {
                return FEMALE;
            }
        }
    }

    private function cargar_datos()
    {
        $datos = array();
        //DATOS FUNDAMENTALES PARA LA PLANTILLA
        $datos['nombrePagina'] = 'Nuevo Usuario';

        //--VARIABLES DE SESION--//
        $datos['nombreUsuario'] = ($this->session->get('nombre') . ' ' . $this->session->get('aP') . ' ' . $this->session->get('aM'));
        $datos['rol'] = $this->session->get('rol');
        $datos['idUsuario'] = $this->session->get('idUsuario');
        $datos['fotoPerfil'] = base_url(RECURSOS_PANEL_IMG_USUARIOS . $this->fotoPerfilM($datos['idUsuario']));

        $breadcrumb = array(
            array(
                'tarea' => 'Usuarios',
                'href' => route_to('usuarios')
            ),
            array(
                'tarea' => 'Nuevo',
                'href' => '#'
            )
        );

        //Instanciar breadcrumb
        $datos['breadcrumb'] = breadcrumb($datos['nombrePagina'], $breadcrumb);
        //DATOS PREPROCESADOS

        return $datos;
    }

    //FUNCION PRINCIPAL
    public function index()
    {
        //Se verifica si la bandera es true
        if ($this->permitido) {
            return $this->crear_vista('panel/usuario_nuevo', $this->cargar_datos());
        } //end else
        else {
            return redirect()->to(route_to('error_401'));
        } //end else
    }

    private function subir_archivo($path = NULL, $file = NULL)
    {
        $file_name = $file->getRandomName();
        //d($file_name);
        $file->move($path, $file_name);
        return $file_name;
    } //end subir_archivo

    //FUNCION PARA AGREGAR UN NUEVO USUARIO
    public function registrar()
    {
        //Instancia del Modelo
        $tabla_usuarios = new \App\Models\Tabla_usuarios;

        //Se declara el arreglo para almacenar todo los datos
        $usuario = array();
        $usuario['estatus_usuario'] = ESTATUS_HABILITADO;
        $usuario['nombre'] = $this->request->getPost("name");
        $usuario['aP'] = $this->request->getPost("apellidoPaterno");
        $usuario['aM'] = $this->request->getPost("apellidoMaterno");
        $usuario['correo'] = $this->request->getPost("email");
        $usuario['password'] = $this->request->getPost('repassword');
        $usuario['idRol'] = $this->request->getPost("rol");
        $usuario['sexoUsuario'] = $this->request->getPost("sexo");

        if (!empty($this->request->getFile('foto_perfil')) && $this->request->getFile('foto_perfil')->getSize() > 0) {
            $usuario['imagenUsuario'] = $this->subir_archivo(RECURSOS_PANEL_IMG_USUARIOS, $this->request->getFile('foto_perfil'));
        } //end if existe imagen
        //Verificamos si existe un registro previo
        $encontro = $tabla_usuarios->existe_usuario($usuario['correo']);

        //Verificamos si el usuario ya existe
        if ($encontro != FALSE) {
            mensaje("El correo " . $usuario['correo'] . " ya existe, por favor ingrese un nuevo correo", ALERT_WARNING, "¡Error al registrar!");
            return $this->index();
        } //end encontro TRUE
        else {
            if ($tabla_usuarios->insert($usuario) > 0) {
                mensaje("El usuario ha sido registrado exitosamente.", ALERT_SUCCES, "¡Registro exitoso!");
                return redirect()->to(route_to('usuarios'));
            } //end if inserta el usuario
            else {
                mensaje("Hubo un error al registrar al usuario. Intente nuevamente, por favor", ALERT_DANGER);
                return $this->index();
            } //end else inserta el usuario
        } //end else
    } //end registrar
}
