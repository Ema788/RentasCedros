<?php
//mostrar informacion especifica
namespace App\Controllers\Panel;

use App\Controllers\BaseController;

class Proyeccion_Detalles extends BaseController
{
    //el arreglo $datos sirve para almacenar la informacion que se va a mostrar en la vista
    private function crear_vista($nombreVista = '', $datos = array())
    {
        $datos['menu'] = crear_menu_panel('proyeccion');
        return view($nombreVista, $datos);
    }

    private function cargar_datos()
    {
        $datos = array();
        //DATOS FUNDAMENTALES PARA LA PLANTILLA
        $datos['nombrePagina'] = 'Detalles de la Proyeccion';


        $session = session();
        //--VARIABLES DE SESION--//
        $datos['nombreUsuario'] = ($session->get('nombre') . ' ' . $session->get('aP') . ' ' . $session->get('aM'));
        $datos['rol'] = $session->get('rol');
        //
        $breadcrumb = array(
            array(
                'tarea' => 'Proyeccion',
                'href' => route_to('proyeccion')
            ),
            array(
                'tarea' => 'Detalles',
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
        return $this->crear_vista('panel/proyeccion_Detalles', $this->cargar_datos());
    }
}
