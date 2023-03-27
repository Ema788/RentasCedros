<?php
//mostrar informacion especifica
namespace App\Controllers\Panel;

use App\Controllers\BaseController;

class Boleto_Nuevo extends BaseController
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
        if (comprobar_acceso(TAREA_BOLETO_NUEVO)) {
            $this->session->tarea_actual = TAREA_BOLETO_NUEVO;
        } //end if 
        else {
            $this->permitido = FALSE;
            $this->session->modulo_permitido = FALSE;
        } //end else
    } //end constructor

    //el arreglo $datos sirve para almacenar la informacion que se va a mostrar en la vista
    private function crear_vista($nombreVista = '', $datos = array())
    {
        $datos['menu'] = crear_menu_panel('boletos');
        return view($nombreVista, $datos);
    }

    private function fotoPerfilM($idInquilino = NULL)
    {
        $tabla_usuarios = new \App\Models\Tabla_usuarios;
        if ($tabla_usuarios->sexoUsuario($idInquilino) == '2') {
            return MALE;
        } else {
            return FEMALE;
        }
    }

    private function cargar_datos()
    {
        $datos = array();
        //DATOS FUNDAMENTALES PARA LA PLANTILLA
        $datos['nombrePagina'] = 'Departamento Nuevo';

        //--VARIABLES DE SESION--//
        $datos['nombre_administrador'] = ($this->session->get('nombre_administrador') . ' ' . $this->session->get('apellido_paterno_administrador') . ' ' . $this->session->get('apellido_materno_administrador'));
        $datos['rol'] = $this->session->get('rol');
        $datos['idAdministrador '] = $this->session->get('idAdministrador ');
        $datos['fotoPerfil'] = base_url(RECURSOS_PANEL_IMG_USUARIOS . $this->fotoPerfilM($datos['idAdministrador ']));

        $breadcrumb = array(
            array(
                'tarea' => 'Departamentos',
                'href' => route_to('boletos')
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

    public function registrar()
    {
        //Instancia del Modelo
        $tabla_usuarios = new \App\Models\Tabla_boletos;

        //Se declara el arreglo para almacenar todo los datos
        $usuario = array();
        $usuario['estatus_departamento'] = ESTATUS_HABILITADO;
        $usuario['numero_departamento'] = $this->request->getPost("numero_departamento");
        $usuario['numero_muebles_departamento'] = $this->request->getPost("numero_muebles_departamento");
        $usuario['descripcion_departamento	'] = $this->request->getPost("descripcion_departamento");

        //Verificamos si existe un registro previo
        $encontro = $tabla_usuarios->existe_usuario($usuario['numero_departamento']);

        //Verificamos si el usuario ya existe
        if ($encontro != FALSE) {
            mensaje("El departamento " . $usuario['numero_departamento'] . " ya existe", ALERT_WARNING);
            return $this->index();
        } //end encontro TRUE
        else {
            if ($tabla_usuarios->insert($usuario) > 0) {
                mensaje("El departamento ha sido registrado exitosamente.", ALERT_SUCCES);
                return redirect()->to(route_to('boletos'));
            } //end if inserta el usuario
            else {
                mensaje("Hubo un error al registrar el departamento. Intente nuevamente, por favor", ALERT_DANGER);
                return $this->index();
            } //end else inserta el usuario
        } //end else
    } //end registrar

    //FUNCION PRINCIPAL
    public function index()
    {
        //Se verifica si la bandera es true
        // if ($this->permitido) {
        //     return $this->crear_vista('panel/boleto_nuevo', $this->cargar_datos());
        // } //end else
        // else {
        //     return redirect()->to(route_to('error_401'));
        // } //end else
        return $this->crear_vista('panel/boleto_nuevo', $this->cargar_datos());
    }
}
