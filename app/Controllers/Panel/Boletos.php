<?php
//mostrar informacion especifica
namespace App\Controllers\Panel;

use App\Controllers\BaseController;

class Boletos extends BaseController
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
        $datos['menu'] = crear_menu_panel('boletos');
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
        $datos['nombrePagina'] = 'Departamentos';

        //--VARIABLES DE SESION--//
        $datos['nombre_administrador'] = ($this->session->get('nombre_administrador') . ' ' . $this->session->get('apellido_paterno_administrador') . ' ' . $this->session->get('apellido_materno_administrador'));
        $datos['rol'] = $this->session->get('rol');
        $datos['idAdministrador '] = $this->session->get('idAdministrador ');
        $datos['fotoPerfil'] = base_url(RECURSOS_PANEL_IMG_USUARIOS . $this->fotoPerfilM($datos['idAdministrador ']));


        //
        $breadcrumb = array(
            array(
                'tarea' => 'Departamentos',
                'href' => '#'
            )
        );


        //Instanciar breadcrumb
        $datos['breadcrumb'] = breadcrumb($datos['nombrePagina'], $breadcrumb);

        //DATOS PREPROCESADOS
        $tabla_boletos = new \App\Models\Tabla_boletos;
        $datos['boletos'] = $tabla_boletos->data_table_boletos();

        return $datos;
    }

    //FUNCION PRINCIPAL
    public function index()
    {
        //Se verifica si la bandera es true
        // if ($this->permitido) {
        //     return $this->crear_vista('panel/boletos', $this->cargar_datos());
        // } //end else
        // else {
        //     return redirect()->to(route_to('error_401'));
        // } //end else
        return $this->crear_vista('panel/boletos', $this->cargar_datos());
    }
}
