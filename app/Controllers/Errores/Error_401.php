<?php

namespace App\Controllers\Errores;

use App\Controllers\BaseController;

class Error_401 extends BaseController
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
        if (comprobar_acceso(TAREA_USUARIOS)) {
            $this->session->tarea_actual = TAREA_USUARIOS;
        } //end if 
        else {
            $this->permitido = FALSE;
            $this->session->modulo_permitido = FALSE;
        } //end else
    } //end constructor

    //Generar y mandar a llamar la vista especifica
    private function crear_vista($nombre_vista = '', $datos = array())
    {
        $datos['menu'] = crear_menu_panel();
        return view($nombre_vista, $datos);
    } //end crear_vista

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
        // =====================================
        // Datos fundamentales para la plantilla
        // =====================================
        $this->session->tarea_actual = '';

        // ------VARIABLES DE SESSION --------
        $datos['nombreUsuario'] = ($this->session->nombre . ' ' . $this->session->aP . ' ' . $this->session->aM);
        $datos['rol'] = $this->session->rol;
        $datos['nombrePagina'] = 'Error 401';
        $datos['tarea'] = '';
        $datos['idUsuario'] = $this->session->get('idUsuario');
        $datos['fotoPerfil'] = base_url(RECURSOS_PANEL_IMG_USUARIOS . $this->fotoPerfilM($datos['idUsuario']));
        //Breadcrum
        $breadcrumb = array(
            array()
        );
        $datos['breadcrumb'] = breadcrumb($datos['nombrePagina'], $breadcrumb);
        // =====================================
        // Datos prepocesados
        // =====================================
        return $datos;
    } //end cargar_datos

    //Funcion principal
    public function index()
    {
        return $this->crear_vista('errores/error_401', $this->cargar_datos());
    } //end index

}//end Dashboard