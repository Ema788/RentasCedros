<?php
//mostrar informacion especifica
namespace App\Controllers\Panel;

use App\Controllers\BaseController;

class Peliculas_Accion extends BaseController
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
  
    //el arreglo $datos sirve para almacenar la informacion que se va a mostrar en la vista
    private function crear_vista($nombreVista = '', $datos = array())
    {
        $datos['menu'] = crear_menu_panel('peliculas');
        return view($nombreVista, $datos);
    }

    private function cargar_datos()
    {
        $datos = array();
        //DATOS FUNDAMENTALES PARA LA PLANTILLA
        $datos['nombrePagina'] = 'Peliculas Accion';

        $session = session();
        //--VARIABLES DE SESION--//
        $datos['nombreUsuario'] = ($session->get('nombre') . ' ' . $session->get('aP') . ' ' . $session->get('aM'));
        $datos['rol'] = $session->get('rol');
        $breadcrumb = array(
            array(
                'tarea' => 'Peliculas Accion',
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
        mensaje("Películas Acción", ALERT_INFO, 1000);
        //declarar funcion de mensaje 
        return $this->crear_vista('panel/peliculas_accion', $this->cargar_datos());
    }
}
