<?php
//mostrar informacion especifica
namespace App\Controllers\Panel;

use App\Controllers\BaseController;

class FormularioPago extends BaseController
{
    //el arreglo $datos sirve para almacenar la informacion que se va a mostrar en la vista
    private function crear_vista($nombreVista = '', $datos = array())
    {
        //      $datos['menu'] = crear_menu_panel();
        $datos['menu'] = '';
        return view($nombreVista, $datos);
    }

    private function cargar_datos()
    {
        $datos = array();
        //DATOS FUNDAMENTALES PARA LA PLANTILLA
        $datos['nombrePagina'] = 'Pago';

        $session = session();
        //--VARIABLES DE SESION--//
        $datos['nombreUsuario'] = ($session->get('nombre') . ' ' . $session->get('aP') . ' ' . $session->get('aM'));

        //
        $breadcrumb = array(
            array(
                'tarea' => 'Dashboard',
                'href' => route_to('dashboard')
            ),
            array(
                'tarea' => 'Formulario de pago',
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
        return $this->crear_vista('panel/formularioPago', $this->cargar_datos());
    }
}
