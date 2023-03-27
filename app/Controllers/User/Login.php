<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Login extends BaseController
{
    //definir constructor para usar el helper de formularios
    public function __construct()
    {
        helper('form');
    }

    //Generar y mandar a llamar la vista especifica
    private function crear_vista($nombre_vista = '')
    {
        return view($nombre_vista);
    } //end crear_vista

    public function login()
    {
        //Cargamos la intancia de sesion
        $session = session();

        //Comprobamos si el valor ha sido instanciado
        if (isset($session->sesion_iniciada)) {

            if ($session->modulo_permitido == FALSE) {
                return redirect()->to(route_to('error_401'));
            }
            return redirect()->to(route_to('dashboard'));
        } //end if
        else {
            return $this->crear_vista('user/login');
        } //end else
    }

    public function validar()
    {
        //debugea informacion y continua con el flujo
        //d("Vamos a validar, espera 10 min");
        $email = $this->request->getPost("email");
        $password = $this->request->getPost("password");
        //d($password);

        //CARGAR MODELO
        $tabla_administradores = new \App\Models\Tabla_usuarios;
        //instancia de la clase         recibe parametros
        $usuario = $tabla_administradores->validar_Usuario($email, $password);
        //debugea la informacion pero para el flujo cuando lo encuentra
        //dd($usuario);
        //PARA ACCEDER A UN ATRIBUTO DE LA ENTIDAD
        //d($usuario->idRol);
        //LOGIN
        //CONDICIONES
        //CI4

        $session = session();

        if ($usuario != null) {
            if ($usuario->estatus_administrador == ESTATUS_HABILITADO) {
                $session->set("sesion iniciada", TRUE);
                $session->set("modulo_permitido", TRUE);
                $session->set("idAdministrador", $usuario->idAdministrador);
                $session->set("estatus_administrador", $usuario->estatus_administrador);
                $session->set("nombre_administrador", $usuario->nombre_administrador);
                $session->set("apellido_paterno_administrador", $usuario->apellido_paterno_administrador);
                $session->set("apellido_materno_administrador", $usuario->apellido_materno_administrador);
                $session->set("email_administrador", $usuario->email_administrador);
                $session->set("password_administrador", $usuario->password_administrador);
                $session->set("rol", $usuario->nombre_rol);
                $session->set("tarea_actual",TAREA_DASHBOARD);
                //$session->set("rol", $usuario->rol);
                mensaje("Bienvenido " . $session->nombre_administrador, ALERT_INFO, 2000);
                return redirect()->to(route_to('dashboard'));
            } else {
                mensaje("El usuario se encuentra deshabilitado. Contacta al administrador", ALERT_DANGER, 2000);
                return redirect()->to(route_to('login'));
            }
        } else {
            //mensaje("Usuario o contraseña incorrectos", ALERT_DANGER, 2000);
            return redirect()->to(route_to('login'));
        }
    }
}
