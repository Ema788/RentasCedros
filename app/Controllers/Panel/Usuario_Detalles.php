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

    private function cargar_datos($info_usuario = array())
    {
        $datos = array();
        //DATOS FUNDAMENTALES PARA LA PLANTILLA
        $session = session();
        //$session->tarea_actual = TAREA_USUARIO_DETALLES;


        //--VARIABLES DE SESION--//
        $datos['nombreUsuario'] = ($session->get('nombre') . ' ' . $session->get('aP') . ' ' . $session->get('aM'));
        $datos['rol'] = $session->get('rol');
        $datos['foto_usuario'] = base_url(RECURSOS_PANEL_IMG_USUARIOS . $session->imagen_usuario);
        $datos['nombrePagina'] = 'Detalles del usuario';
        $datos['tarea'] = 'Usuario detalles';
        //
        $breadcrumb = array(
            array(
                'tarea' => 'Usuarios',
                'href' => route_to('usuarios')
            ),
            array(
                'tarea' => 'Usuario Detalles',
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
    public function index($idUsuario = 0)
    {
        //instancia al modelo usuarios
        $tabla_usuarios = new \App\Models\Tabla_usuarios;
        $usuario = $tabla_usuarios->obtener_usuarios($idUsuario);

        //verificamos si no esta vacio 
        if (is_null($usuario)) {
            mensaje('No se encuenta el usuario proporcionado.', ALERT_WARNING);
            return redirect()->to(route_to('usuarios'));
        } //end if
        else {
            return $this->crear_vista('panel/usuario_detalles', $this->cargar_datos($usuario));
        }
    }

    private function subir_archivo($path = NULL, $file = NULL)
    {
        $file_name = $file->getRandomName();
        //d($file_name);
        $file->move($path, $file_name);
        return $file_name;
    } //end subir_archivo

    //funcion eliminar imagen
    private function eliminar_archivo($path = NULL, $file = NULL)
    {
        if (!empty($file)) {
            if (file_exists($path . $file)) {
                unlink($path . $file);
                return TRUE;
            } //end if
        } //end if is_null
        else {
            return FALSE;
        } //end else is_null
    } //end eliminar_archivo 

    public function editar()
    {
        //instancia del modelo
        $tabla_usuarios = new \App\Models\Tabla_usuarios;

        //Usuario que se desea editar
        $idUsuario = $this->request->getPost("idUsuario");

        //se declara el arreglo para almacenar los datos 
        $usuario = array();
        $usuario['nombre'] = $this->request->getPost("name");
        $usuario['aP'] = $this->request->getPost("apellidoPaterno");
        $usuario['aM'] = $this->request->getPost("apellidoMaterno");
        $usuario['correo'] = $this->request->getPost("email");
        $usuario['idRol'] = $this->request->getPost("rol");
        $usuario['sexoUsuario'] = $this->request->getPost("sexo");

        //verificamos si la contraseña a repetir no esta vacia 
        if (!is_null($this->request->getPost('repassword'))) {
            $usuario['password'] = $this->request->getPost('repassword');
        } //end if
        //verificamos si es el usuario desea cambiar la foto_perfil 
        //dd($tabla_usuarios->imagenPerfil($idUsuario));
        if (!empty($this->request->getFile('foto_perfil')) && $this->request->getFile('foto_perfil')->getSize() > 0) {
            $this->eliminar_archivo(RECURSOS_PANEL_IMG_USUARIOS, $tabla_usuarios->imagenPerfil($idUsuario));
            $usuario['imagenUsuario'] = $this->subir_archivo(RECURSOS_PANEL_IMG_USUARIOS, $this->request->getFile('foto_perfil'));
        }
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
