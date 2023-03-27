<?php
//mostrar informacion especifica
namespace App\Controllers\Panel;

use App\Controllers\BaseController;

class Proyeccion extends BaseController
{
    //Atributos
    private $session;
    private $permitido = TRUE;

    public function __construct()
    {
        //Se intancia el Acceso helper
        helper('permisos_helper');

        //instancia de la sesion
        $this->session = session();

        //Verifica si el usuario logeado cuenta con los permiso de esta area
        if (comprobar_acceso(TAREA_BOLETOS)) {
            $this->session->tarea_actual = TAREA_BOLETOS;
        } //end if 
        else {
            $this->permitido = FALSE;
            $this->session->modulo_permitido = FALSE;
        } //end else
    } //end constructor

    //el arreglo $datos sirve para almacenar la informacion que se va a mostrar en la vista
    private function crear_vista($nombreVista = '', $datos = array())
    {
        $datos['menu'] = crear_menu_panel('proyecciones');
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
        $datos['nombrePagina'] = 'Pagos de alquiler';

    //--VARIABLES DE SESION--//
    $datos['nombre_administrador'] = ($this->session->get('nombre_administrador') . ' ' . $this->session->get('apellido_paterno_administrador') . ' ' . $this->session->get('apellido_materno_administrador'));
    $datos['rol'] = $this->session->get('rol');
    $datos['idAdministrador '] = $this->session->get('idAdministrador ');
    $datos['fotoPerfil'] = base_url(RECURSOS_PANEL_IMG_USUARIOS . $this->fotoPerfilM($datos['idAdministrador ']));
        //
        $breadcrumb = array(
            array(
                'tarea' => 'Pagos',
                'href' => '#'
            )
        );


        //Instanciar breadcrumb
        $datos['breadcrumb'] = breadcrumb($datos['nombrePagina'], $breadcrumb);

        //DATOS PREPROCESADOS
        $tabla_boletos = new \App\Models\Tabla_pagos;
        $datos['boletos'] = $tabla_boletos->data_table_boletos();

        return $datos;
    }

    //FUNCION PRINCIPAL
    public function index()
    {
        //mensaje("Lista de proyecciones", ALERT_INFO, 1000);
        //declarar funcion de mensaje 
        return $this->crear_vista('panel/proyeccion', $this->cargar_datos());
    }
}
