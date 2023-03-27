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

    private function fotoPerfilM($idAdministrador = NULL)
    {
        $tabla_usuarios = new \App\Models\Tabla_usuarios;
        if ($tabla_usuarios->sexoUsuario($idAdministrador) == '2') {
            return MALE;
        } else {
            return FEMALE;
        }
    }

    private function cargar_datos()
    {
        $datos = array();
        //DATOS FUNDAMENTALES PARA LA PLANTILLA
        $datos['nombrePagina'] = 'Nuevo inquilino';

        //--VARIABLES DE SESION--//
        $datos['nombre_administrador'] = ($this->session->get('nombre_administrador') . ' ' . $this->session->get('apellido_paterno_administrador') . ' ' . $this->session->get('apellido_materno_administrador'));
        $datos['rol'] = $this->session->get('rol');
        $datos['idAdministrador'] = $this->session->get('idAdministrador');
        $datos['fotoPerfil'] = base_url(RECURSOS_PANEL_IMG_USUARIOS . $this->fotoPerfilM($datos['idAdministrador']));

        $breadcrumb = array(
            array(
                'tarea' => 'Inquilinos',
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
        // if ($this->permitido) {
        //     return $this->crear_vista('panel/usuario_nuevo', $this->cargar_datos());
        // } //end else
        // else {
        //     return redirect()->to(route_to('error_401'));
        // } //end else
        return $this->crear_vista('panel/usuario_nuevo', $this->cargar_datos());
    }

    //FUNCION PARA AGREGAR UN NUEVO USUARIO
    public function registrar()
    {
        //Instancia del Modelo
        $tabla_usuarios = new \App\Models\Tabla_inquilinos;

        //Se declara el arreglo para almacenar todo los datos
        $usuario = array();
        $usuario['estatus_inquilino'] = ESTATUS_HABILITADO;
        $usuario['nombre_inquilino'] = $this->request->getPost("nombre_administrador");
        $usuario['apellido_paterno_inquilino'] = $this->request->getPost("apellido_paterno_administrador");
        $usuario['apellido_materno_inquilino	'] = $this->request->getPost("apellido_materno_administrador");
        $usuario['numero_telefono_inquilino'] = $this->request->getPost("numero_telefono_inquilino");
        $usuario['conctacto_emergencia_inquilino'] = $this->request->getPost("conctacto_emergencia_inquilino");
        $usuario['email_inquilino'] = $this->request->getPost("email_administrador");
        $usuario['password_inquilino'] = $this->request->getPost('password_administrador');
        $usuario['sexo_inquilino'] = $this->request->getPost("sexo_administrador");
        $usuario['idRol'] = $this->request->getPost("rol");

        //Verificamos si existe un registro previo
        $encontro = $tabla_usuarios->existe_usuario($usuario['email_inquilino']);

        //Verificamos si el usuario ya existe
        if ($encontro != FALSE) {
            mensaje("El correo " . $usuario['email_inquilino'] . " ya existe, por favor ingrese un nuevo correo", ALERT_WARNING, "¡Error al registrar!");
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
