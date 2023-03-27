<?php
//mostrar informacion especifica
namespace App\Controllers\Panel;

use App\Controllers\BaseController;

class Usuario_Detalles extends BaseController
{
    //el arreglo $datos sirve para almacenar la informacion que se va a mostrar en la vista
    private function crear_vista($nombreVista = '', $datos = array())
    {
        $datos['menu'] = crear_menu_panel('usuarios');
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

    private function cargar_datos($info_usuario = array())
    {
        $datos = array();
        //DATOS FUNDAMENTALES PARA LA PLANTILLA
        $session = session();
        //$session->tarea_actual = TAREA_USUARIO_DETALLES;


        //--VARIABLES DE SESION--//
        $datos['nombre_administrador'] = ($session->get('nombre_administrador') . ' ' . $session->get('apellido_paterno_administrador') . ' ' . $session->get('apellido_materno_administrador'));
        $datos['rol'] = $session->get('rol');
        $datos['idAdministrador'] = $session->get('idAdministrador');
        $datos['fotoPerfil'] = base_url(RECURSOS_PANEL_IMG_USUARIOS . $this->fotoPerfilM($datos['idAdministrador']));
        $datos['nombrePagina'] = 'Detalles del inquilino';
        $datos['tarea'] = 'Detalles de inquilino';
        //
        $breadcrumb = array(
            array(
                'tarea' => 'Inquilinos',
                'href' => route_to('usuarios')
            ),
            array(
                'tarea' => 'Detalles de inquilino',
                'href' => '#'
            )
        );


        //Instanciar breadcrumb
        $datos['breadcrumb'] = breadcrumb($datos['tarea'], $breadcrumb); //tenia nombre pagina 
        //DATOS PREPROCESADOS
        $datos['usuario'] = $info_usuario;
        return $datos;
    } //end cargar datos

    //FUNCION PRINCIPAL
    public function index($idAdministrador  = 0)
    {
        //instancia al modelo usuarios
        $tabla_usuarios = new \App\Models\Tabla_usuarios;
        $usuario = $tabla_usuarios->obtener_usuarios($idAdministrador );

        //verificamos si no esta vacio 
        if (is_null($usuario)) {
            mensaje('No se encuenta el usuario proporcionado.', ALERT_WARNING);
            return redirect()->to(route_to('usuarios'));
        } //end if
        else {
            return $this->crear_vista('panel/usuario_detalles', $this->cargar_datos($usuario));
        }
    }

    public function editar()
    {
        //instancia del modelo
        $tabla_usuarios = new \App\Models\Tabla_usuarios;

        //Usuario que se desea editar
        $idUsuario = $this->request->getPost("idUsuario");

        //se declara el arreglo para almacenar los datos 
        $usuario = array();
        $usuario['nombre_administrador'] = $this->request->getPost("name");
        $usuario['apellido_paterno_administrador'] = $this->request->getPost("apellidoPaterno");
        $usuario['apellido_materno_administrador'] = $this->request->getPost("apellidoMaterno");
        $usuario['email_administrador'] = $this->request->getPost("email");
        $usuario['idRol'] = $this->request->getPost("rol");
        $usuario['sexo_administrador'] = $this->request->getPost("sexo");

        //verificamos si la contraseña a repetir no esta vacia 
        if (!is_null($this->request->getPost('repassword'))) {
            $usuario['password_administrador'] = $this->request->getPost('repassword');
        } //end if
        //verificamos si es el usuario desea cambiar la foto_perfil 
        //dd($tabla_usuarios->imagenPerfil($idUsuario));
        if ($tabla_usuarios->updateDos($usuario, $idUsuario) > 0) {
            mensaje("El usuario ha sido actualizado exitosamente.", ALERT_SUCCES);
            return redirect()->to(route_to('usuarios'));
        } //end if se actualiza el usuario
        else {
            mensaje("Hubo un error al actualizar al usuario. Intente nuevamente, por favor", ALERT_DANGER);
            return $this->index($idUsuario);
        } //end else se inserta el usuario
    }
}
