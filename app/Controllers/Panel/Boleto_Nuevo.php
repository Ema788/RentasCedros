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
        $datos['nombrePagina'] = 'Boleto Nuevo';

        //--VARIABLES DE SESION--//
        $datos['nombreUsuario'] = ($this->session->get('nombre') . ' ' . $this->session->get('aP') . ' ' . $this->session->get('aM'));
        $datos['rol'] = $this->session->get('rol');
        $datos['idUsuario'] = $this->session->get('idUsuario');
        $datos['fotoPerfil'] = base_url(RECURSOS_PANEL_IMG_USUARIOS . $this->fotoPerfilM($datos['idUsuario']));

        $breadcrumb = array(
            array(
                'tarea' => 'Boletos',
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

    //FUNCION PRINCIPAL
    public function index()
    {
        //Se verifica si la bandera es true
        if ($this->permitido) {
            return $this->crear_vista('panel/boleto_nuevo', $this->cargar_datos());
        } //end else
        else {
            return redirect()->to(route_to('error_401'));
        } //end else
    }
}
