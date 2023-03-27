<?php
//mostrar informacion especifica
namespace App\Controllers\Panel;

use App\Controllers\BaseController;

class Contacto extends BaseController
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
        if (comprobar_acceso(TAREA_CONTACTO)) {
            $this->session->tarea_actual = TAREA_CONTACTO;
        } //end if 
        else {
            $this->permitido = FALSE;
            $this->session->modulo_permitido = FALSE;
        } //end else
    } //end constructor

    //el arreglo $datos sirve para almacenar la informacion que se va a mostrar en la vista
    private function crear_vista($nombreVista = '', $datos = array())
    {
        $datos['menu'] = crear_menu_panel('contacto');
        return view($nombreVista, $datos);
    }

    private function fotoPerfilM($idAdministrador = NULL)
    {
        $tabla_usuarios = new \App\Models\Tabla_usuarios;
        if ($tabla_usuarios->sexoUsuario($idAdministrador) == '2') {
            return MALE;
        } else {
            return FEMALE;
        }
    }

    private function cargar_datos()
    {
        $datos = array();
        //DATOS FUNDAMENTALES PARA LA PLANTILLA
        $datos['nombrePagina'] = 'Quejas';

        //--VARIABLES DE SESION--//
        $datos['nombre_administrador'] = ($this->session->get('nombre_administrador') . ' ' . $this->session->get('apellido_paterno_administrador') . ' ' . $this->session->get('apellido_materno_administrador'));
        $datos['rol'] = $this->session->get('rol');
        $datos['idAdministrador'] = $this->session->get('idAdministrador');
        $datos['fotoPerfil'] = base_url(RECURSOS_PANEL_IMG_USUARIOS . $this->fotoPerfilM($datos['idAdministrador']));

        //
        $breadcrumb = array(
            array(
                'tarea' => 'Quejas',
                'href' => '#'
            )
        );


        //Instanciar breadcrumb
        $datos['breadcrumb'] = breadcrumb($datos['nombrePagina'], $breadcrumb);

        //DATOS PREPROCESADOS
        $tabla_Usuarios = new \App\Models\Tabla_quejas();
        $datos['usuarios'] = $tabla_Usuarios->data_table_boletos();

        return $datos;
    }

    //FUNCION PRINCIPAL
    public function index()
    {
            return $this->crear_vista('panel/contacto', $this->cargar_datos());
        
    }
}
