<?php
//mostrar informacion especifica
namespace App\Controllers\Panel;

use App\Controllers\BaseController;

class Perfil extends BaseController
{
    //el arreglo $datos sirve para almacenar la informacion que se va a mostrar en la vista
    private function crear_vista($nombreVista = '', $datos = array())
    {
        $datos['menu'] = crear_menu_panel('');
        return view($nombreVista, $datos);
    }

    private function cargar_datos()
    {
        $datos = array();
        //DATOS FUNDAMENTALES PARA LA PLANTILLA
        $datos['nombrePagina'] = 'Perfil';

        $session = session();
        //--VARIABLES DE SESION--//
        $datos['nombreUsuario'] = ($session->get('nombre') . ' ' . $session->get('aP') . ' ' . $session->get('aM'));
        $datos['rol'] = $session->get('rol');
        //VARIABLES PARA EL FORMULARIO DEL PERFIL
        $datos['nombre'] = $session->get('nombre');
        $datos['aP'] = $session->get('aP');
        $datos['aM'] = $session->get('aM');
        $datos['correo'] = $session->get('correo');
        $datos['password'] = $session->get('password');
        $datos['idRol'] = $session->get('idRol');
        $datos['rol'] = $session->get('rol');

        $breadcrumb = array(
            array(
                'tarea' => 'Perfil',
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
        return $this->crear_vista('panel/perfil', $this->cargar_datos());
    }
}
