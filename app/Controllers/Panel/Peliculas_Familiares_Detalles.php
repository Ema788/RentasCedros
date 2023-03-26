<?php
//mostrar informacion especifica
namespace App\Controllers\Panel;

use App\Controllers\BaseController;

class Peliculas_Familiares_Detalles extends BaseController
{
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
        $datos['nombrePagina'] = 'Peliculas Detalles';

        $session = session();
        //--VARIABLES DE SESION--//
        $datos['nombreUsuario'] = ($session->get('nombre') . ' ' . $session->get('aP') . ' ' . $session->get('aM'));
        $datos['rol'] = $session->get('rol');
        $breadcrumb = array(
            array(
                'tarea' => 'Peliculas Familiares',
                'href' => 'peliculas_Familiares'
            ),
            array(
                'tarea' => 'Peliculas de Comedia',
                'href' => route_to('peliculas_Comedia')
            ),
            array(
                'tarea' => 'Peliculas de Accion',
                'href' => route_to('peliculas_Accion')
            ),
            array(
                'tarea' => 'Detalles',
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
        return $this->crear_vista('panel/peliculas_familiares_detalles', $this->cargar_datos());
    }

        //FUNCION PARA AGREGAR UN NUEVA PELICULA
        public function nuevaPeli()
        {
            //Instancia del Modelo
            $tabla_usuarios = new \App\Models\Tabla_usuarios;
    
            //Se declara el arreglo para almacenar todo los datos
            $usuario = array();
            $usuario['estatus_usuario'] = ESTATUS_HABILITADO;
            $usuario['nombre'] = $this->request->getPost("name");
            $usuario['aP'] = $this->request->getPost("apellidoPaterno");
            $usuario['aM'] = $this->request->getPost("apellidoMaterno");
            $usuario['correo'] = $this->request->getPost("email");
            $usuario['password'] = $this->request->getPost('repassword');
            $usuario['idRol'] = $this->request->getPost("rol");
            $usuario['sexoUsuario'] = $this->request->getPost("sexo");
    
            if (!empty($this->request->getFile('foto_perfil')) && $this->request->getFile('foto_perfil')->getSize() > 0) {
                $usuario['imagenUsuario'] = $this->subir_archivo(RECURSOS_PANEL_IMG_USUARIOS, $this->request->getFile('foto_perfil'));
            } //end if existe imagen
            //Verificamos si existe un registro previo
            $encontro = $tabla_usuarios->existe_usuario($usuario['correo']);
    
            //Verificamos si el usuario ya existe
            if ($encontro != FALSE) {
                mensaje("El correo " . $usuario['correo'] . " ya existe, por favor ingrese un nuevo correo", ALERT_WARNING, "¡Error al registrar!");
                return $this->index();
            } //end encontro TRUE
            else {
                if ($tabla_usuarios->insert($usuario) > 0) {
                    mensaje("El usuario ha sido registrado exitosamente.", ALERT_SUCCES, "¡Registro exitoso!");
                    return redirect()->to(route_to('usuarios'));
                } //end if inserta el usuario
                else {
                    mensaje("Hubo un error al registrar al usuario. Intente nuevamente, por favor", ALERT_DANGER);
                    return $this->index();
                } //end else inserta el usuario
            } //end else
        } //end registrar
}
