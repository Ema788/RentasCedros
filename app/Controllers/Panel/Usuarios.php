<?php
//mostrar informacion especifica
namespace App\Controllers\Panel;

use App\Controllers\BaseController;

class Usuarios extends BaseController
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
    $datos['menu'] = crear_menu_panel('usuarios');
    return view($nombreVista, $datos);
  }

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
    //DATOS FUNDAMENTALES PARA LA PLANTILLA
    $datos['nombrePagina'] = 'Usuarios';
    $datos['tarea'] = 'Usuarios';
    //--VARIABLES DE SESION--//
    $datos['nombreUsuario'] = ($this->session->get('nombre') . ' ' . $this->session->get('aP') . ' ' . $this->session->get('aM'));
    $datos['rol'] = $this->session->get('rol');
    $datos['idUsuario'] = $this->session->get('idUsuario');
    $datos['fotoPerfil'] = base_url(RECURSOS_PANEL_IMG_USUARIOS . $this->fotoPerfilM($datos['idUsuario']));
    //breadcrumb
    $breadcrumb = array(
      array(
        'tarea' => 'Usuarios',
        'href' => '#'
      )
    );

    //Instanciar breadcrumb
    $datos['breadcrumb'] = breadcrumb($datos['nombrePagina'], $breadcrumb);

    //DATOS PREPROCESADOS
    $tabla_Usuarios = new \App\Models\Tabla_usuarios;
    $datos['usuarios'] = $tabla_Usuarios->data_table_usuarios($this->session->idUsuario, ROL_ADMINISTRADOR['clave']);

    return $datos;
  }

  //FUNCION PRINCIPAL
  public function index()
  {
    //Se verifica si la bandera es true
    if ($this->permitido) {
      return $this->crear_vista('panel/usuarios', $this->cargar_datos());
    } //end else
    else {
      return redirect()->to(route_to('error_401'));
    } //end else
  }

  //FUNCION PARA ACTUALIZAR EL ESTATUS DEL USUARIO
  public function estatus($idUsuario = 0, $estatus_usuario = 0)
  {
    //Modelo
    $tabla_usuarios = new \App\Models\Tabla_usuarios;

    if ($tabla_usuarios->existe_usuario_id($idUsuario) == TRUE) {
      if ($tabla_usuarios->updateEstatus(['estatus_usuario' => $estatus_usuario], $idUsuario) > 0) {
        mensaje("El estatus del usuario ha sido actualizado exitosamente.", ALERT_SUCCES);
      } //end if se actualiza el usuario
      else {
        mensaje("Hubo un error al actualizar el estatus de este usuario. Intente nuevamente, por favor", ALERT_DANGER);
      } //end else se inserta el usuario
      return redirect()->to(route_to('usuarios'));
    } else {
      mensaje("El usuario que intenta actualizar no existe.", ALERT_DANGER);
      return redirect()->to(route_to('usuarios'));
    }
  } //end estatus

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

  //FUNCION PARA ELIMINAR USUARIO
  public function eliminar($idUsuario = 0)
  {
    //Modelo  
    $tabla_usuarios = new \App\Models\Tabla_usuarios;

    if ($tabla_usuarios->existe_usuario_id($idUsuario) == TRUE && $tabla_usuarios->imagenPerfil($idUsuario) != FALSE) {
      $this->eliminar_archivo(RECURSOS_PANEL_IMG_USUARIOS, $tabla_usuarios->imagenPerfil($idUsuario));
      if ($tabla_usuarios->deleteUser($idUsuario) > 0) {
        mensaje("El usuario ha sido eliminado exitosamente.", ALERT_SUCCES);
      } //end if se actualiza el usuario
      else {
        mensaje("Hubo un error al eliminar este usuario. Intente nuevamente, por favor", ALERT_DANGER);
      } //end else se inserta el usuario
    } else {
      mensaje("El usuario que intenta eliminar no existe.", ALERT_DANGER);
    } //end else se inserta el usuario
    return redirect()->to(route_to('usuarios'));
  } //end eliminar

}
