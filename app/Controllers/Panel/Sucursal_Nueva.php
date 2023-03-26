<?php
//mostrar informacion especifica
namespace App\Controllers\Panel;

use App\Controllers\BaseController;

class Sucursal_Nueva extends BaseController
{

    //Constructor
    public function __construct()
    {
        //Se intancia el Acceso helper
        helper('permisos_helper');
    
        //instancia de la sesion
        $this->session = session();
    
        //Verifica si el usuario logeado cuenta con los permiso de esta area
        if (comprobar_acceso(TAREA_SUCURSAL_NUEVA)) {
            $this->session->tarea_actual = TAREA_SUCURSAL_NUEVA;
        } //end if 
        else {
            $this->permitido = FALSE;
            $this->session->modulo_permitido = FALSE;
        } //end else
    } //end constructor


    //el arreglo $datos sirve para almacenar la informacion que se va a mostrar en la vista
    private function crear_vista($nombreVista = '', $datos = array())
    {
        $datos['menu'] = crear_menu_panel('sucursales');
        return view($nombreVista, $datos);
    }

    private function cargar_datos()
    {
        $datos = array();
        //DATOS FUNDAMENTALES PARA LA PLANTILLA
        $datos['nombrePagina'] = 'Sucursal Nueva';


        $session = session();
    //--VARIABLES DE SESION--//
    $datos['nombreUsuario'] = ($session->get('nombre') . ' ' . $session->get('aP') . ' ' . $session->get('aM'));
    $datos['rol'] = $session->get('rol');
        //
        $breadcrumb = array(
            array(
                'tarea' => 'Sucursales',
                'href' => route_to('sucursales')
            ),
            array(
                'tarea' => 'Nueva',
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
        mensaje("Formulario de sucursal nueva", ALERT_INFO, 1000);
        //declarar funcion de mensaje 
        return $this->crear_vista('panel/sucursal_nueva', $this->cargar_datos());
    }


}
