<?php

namespace App\Models;

use CodeIgniter\Model;
//sha2('password', 0);
class Tabla_usuarios extends Model
{
    //Configuracion esencial
    protected $table = 'administradores';
    protected $primarykey = 'idAdministrador';
    //Objeto ya esta instanciado
    //Atributos de esa entidad
    protected $returnType = 'object';
    //Depende de los campos de la entidad
    protected $allowedFields = [
        'estatus_administrador',
        'nombre_administrador',
        'apellido_paterno_administrador',
        'apellido_materno_administrador',
        'email_administrador',
        'password_administrador',
        'sexo_administrador',
        'idRol'
    ];

    //Funciones Espeificas
    public function validar_Usuario($email = null, $password = null)
    {
        return $this->select('administradores.nombre_administrador,
                            administradores.idAdministrador,
                            administradores.estatus_administrador,
                            administradores.apellido_paterno_administrador,
                            administradores.apellido_materno_administrador,
                            administradores.email_administrador,
                            administradores.password_administrador,
                            administradores.sexo_administrador,
                            administradores.idRol,
                            roles.nombre_rol')
            ->join('roles', 'administradores.idRol = roles.idRol')
            ->where('administradores.email_administrador', $email)
            ->where('administradores.password_administrador', $password)
            ->first();
    }

    public function existe_usuario($email = null)
    {
        //Generamos la consulta SQL
        $resultado = $this
            ->select('email_administrador')
            ->where('email_administrador', $email)
            ->first();

        $opcion = FALSE;

        if ($resultado != NULL) {
            $opcion = TRUE;
        } //end if existe registro

        return $opcion;
    } //end encontrar_usuario

    public function data_table_usuarios($idUsuario_Sesion = 0, $rol = 0)
    {
        //se pone 0 para no definir el id del usuario
        $resultado = $this->select('administradores.idAdministrador,
        administradores.estatus_administrador,
        administradores.nombre_administrador,
        administradores.apellido_paterno_administrador,
        administradores.apellido_materno_administrador,
        administradores.email_administrador,
        administradores.password_administrador,
        administradores.sexo_administrador,
        roles.nombre_rol')
            ->join('roles', 'administradores.idRol = roles.idRol')
            ->where('administradores.idAdministrador !=', $idUsuario_Sesion)
            //->where('administradores.idRol =', 2)
            ->orderBy('apellido_paterno_administrador', 'ASC')
            ->findAll();
        return $resultado;
    }

    public function obtener_usuarios($idUsuario = 0)
    {
        $resultado = $this
            ->select('idAdministrador , nombre_administrador, apellido_paterno_administrador, apellido_materno_administrador, email_administrador, idRol, sexo_administrador')
            ->where('idAdministrador ', $idUsuario)
            ->first();
        return $resultado;
    }

    public function existe_usuario_id($idUsuario = null)
    {
        //Generamos la consulta SQL
        $resultado = $this
            ->select('idAdministrador')
            ->where('idAdministrador', $idUsuario)
            ->first();

        $opcion = FALSE;

        if ($resultado != NULL) {
            $opcion = TRUE;
        } //end if existe la id

        return $opcion;
    } //end encontrar_usuario

    public function updateDos($data = array(), $id_usuario = 0)
    {
        return $this->db->table($this->table)
            ->where(["idAdministrador" => $id_usuario])
            ->set($data)
            ->update();
    } //end updateDos

    public function updateEstatus($data = array(), $idAdministrador = 0)
    {
        return $this->db->table($this->table)
            ->where(["idAdministrador" => $idAdministrador])
            ->set($data)
            ->update();
    } //end updateDos

    public function deleteUser($id_usuario = 0)
    {
        return $this->db->table($this->table)
            ->where(["idAdministrador" => $id_usuario])
            ->delete();
    } //end updateDos

    public function imagenPerfil($idUsuario = null)
    {
        //Generamos la consulta SQL
        $resultado = $this
            ->select('imagenUsuario')
            ->where('idUsuario', $idUsuario)
            ->first();

        $opcion = $resultado;

        return $opcion->imagenUsuario;
    } //end encontrar_usuario

    public function sexoUsuario($idAdministrador = null)
    {
        //Generamos la consulta SQL
        $resultado = $this
            ->select('sexo_administrador')
            ->where('idAdministrador', $idAdministrador)
            ->first();

        $opcion = $resultado;

        return $opcion->sexo_administrador;
    } //end encontrar_usuario
}
