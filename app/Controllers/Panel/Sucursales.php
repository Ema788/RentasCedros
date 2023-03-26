<?php
//mostrar informacion especifica
namespace App\Controllers\Panel;

use App\Controllers\BaseController;

class Sucursales extends BaseController
{
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
        $datos['nombrePagina'] = 'Sucursales';

        //
        $session = session();
    //--VARIABLES DE SESION--//
    $datos['nombreUsuario'] = ($session->get('nombre') . ' ' . $session->get('aP') . ' ' . $session->get('aM'));
    $datos['rol'] = $session->get('rol');
        $breadcrumb = array(
            array(
                'tarea' => 'Sucursales',
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
        mensaje("Lista de sucursales de cine", ALERT_INFO, 1000);
        //declarar funcion de mensaje 
        return $this->crear_vista('panel/sucursales', $this->cargar_datos());
    }
}
