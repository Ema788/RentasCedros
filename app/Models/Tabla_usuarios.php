<?php

namespace App\Models;

use CodeIgniter\Model;
//sha2('password', 0);
class Tabla_usuarios extends Model
{
    //Configuracion esencial
    protected $table = 'usuarios';
    protected $primarykey = 'idUsuario';
    //Objeto ya esta instanciado
    //Atributos de esa entidad
    protected $returnType = 'object';
    //Depende de los campos de la entidad
    protected $allowedFields = [
        'estatus_usuario',
        'nombre',
        'aP',
        'aM',
        'correo',
        'password',
        'imagenUsuario',
        'idRol',
        'sexoUsuario'
    ];

    //Funciones Espeificas
    public function validar_Usuario($email = null, $password = null)
    {
        return $this->select('usuarios.nombre,
                                usuarios.idUsuario,
                                usuarios.estatus_usuario,
                                usuarios.aP,
                                usuarios.aM,
                                usuarios.correo,
                                usuarios.password,
                                usuarios.imagenUsuario,
                                usuarios.idRol,
                                usuarios.sexoUsuario,
                                roles.rol')
            ->join('roles', 'usuarios.idRol = roles.idUsuarioRol')
            ->where('usuarios.correo', $email)
            ->where('usuarios.password', $password)
            ->first();
    }

    public function existe_usuario($email = null)
    {
        //Generamos la consulta SQL
        $resultado = $this
            ->select('correo')
            ->where('correo', $email)
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
        $resultado = $this->select('usuarios.idUsuario,
                                        usuarios.estatus_usuario,
                                        usuarios.nombre,
                                        usuarios.aP,
                                        usuarios.aM,
                                        usuarios.correo,
                                        usuarios.password,
                                        usuarios.imagenUsuario,
                                        usuarios.idRol,
                                        usuarios.sexoUsuario,
                                        roles.rol')
            ->join('roles', 'usuarios.idRol = roles.idUsuarioRol')
            ->where('usuarios.idUsuario !=', $idUsuario_Sesion)
            //->where('usuarios.idRol !=', $rol)
            ->orderBy('aP', 'ASC')
            ->findAll();
        return $resultado;
    }

    public function obtener_usuarios($idUsuario = 0)
    {
        $resultado = $this
            ->select('idUsuario, nombre, aP, aM, correo, idRol, sexoUsuario, imagenUsuario')
            ->where('idUsuario', $idUsuario)
            ->first();
        return $resultado;
    }

    public function existe_usuario_id($idUsuario = null)
    {
        //Generamos la consulta SQL
        $resultado = $this
            ->select('idUsuario')
            ->where('idUsuario', $idUsuario)
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
            ->where(["idUsuario" => $id_usuario])
            ->set($data)
            ->update();
    } //end updateDos

    public function updateEstatus($data = array(), $id_usuario = 0)
    {
        return $this->db->table($this->table)
            ->where(["idUsuario" => $id_usuario])
            ->set($data)
            ->update();
    } //end updateDos

    public function deleteUser($id_usuario = 0)
    {
        return $this->db->table($this->table)
            ->where(["idUsuario" => $id_usuario])
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

    public function sexoUsuario($idUsuario = null)
    {
        //Generamos la consulta SQL
        $resultado = $this
            ->select('sexoUsuario')
            ->where('idUsuario', $idUsuario)
            ->first();

        $opcion = $resultado;

        return $opcion->sexoUsuario;
    } //end encontrar_usuario
}
