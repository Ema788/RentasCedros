<?php

namespace App\Models;

use CodeIgniter\Model;
//sha2('password', 0);
class Tabla_inquilinos extends Model
{
    //Configuracion esencial
    protected $table = 'inquilinos';
    protected $primarykey = 'idInquilino ';
    //Objeto ya esta instanciado
    //Atributos de esa entidad
    protected $returnType = 'object';
    //Depende de los campos de la entidad
    protected $allowedFields = [
        'estatus_inquilino',
        'nombre_inquilino',
        'apellido_paterno_inquilino',
        'apellido_materno_inquilino',
        'email_inquilino',
        'numero_telefono_inquilino',
        'conctacto_emergencia_inquilino',
        'password_inquilino',
        'idDepartamento',
        'idAlquiler',
        'idRol',
        'sexo_inquilino'
    ];

    //Funciones Espeificas
    public function validar_Usuario($email = null, $password = null)
    {
        return $this->select('inquilinos.nombre_inquilino,
        inquilinos.idInquilino ,
        inquilinos.estatus_inquilino,
        inquilinos.apellido_paterno_inquilino,
        inquilinos.apellido_materno_inquilino,
        inquilinos.email_inquilino,
        inquilinos.conctacto_emergencia_inquilino,
        inquilinos.password_inquilino,
        inquilinos.idDepartamento,
        inquilinos.idAlquiler,
        inquilinos.sexo_inquilino,
        inquilinos.idRol,
                            roles.nombre_rol')
            ->join('roles', 'inquilinos.idRol = roles.idRol')
            ->where('inquilinos.email_inquilino', $email)
            ->where('inquilinos.password_inquilino', $password)
            ->first();
    }

    public function existe_usuario($email = null)
    {
        //Generamos la consulta SQL
        $resultado = $this
            ->select('email_inquilino')
            ->where('email_inquilino', $email)
            ->first();

        $opcion = FALSE;

        if ($resultado != NULL) {
            $opcion = TRUE;
        } //end if existe registro

        return $opcion;
    } //end encontrar_usuario

    public function data_table_usuarios()
    {
        //se pone 0 para no definir el id del usuario
        $resultado = $this->select('inquilinos.nombre_inquilino,
        inquilinos.idInquilino ,
        inquilinos.estatus_inquilino,
        inquilinos.apellido_paterno_inquilino,
        inquilinos.apellido_materno_inquilino,
        inquilinos.email_inquilino,
        inquilinos.numero_telefono_inquilino,
        inquilinos.conctacto_emergencia_inquilino,
        inquilinos.password_inquilino,
        inquilinos.idDepartamento,
        departamentos.idDepartamento,
        departamentos.numero_departamento,
        inquilinos.sexo_inquilino,
        inquilinos.idRol,
                            roles.nombre_rol')
            ->join('roles', 'inquilinos.idRol = roles.idRol')
            ->join('departamentos', 'inquilinos.idDepartamento = departamentos.idDepartamento')
            ->findAll();
        return $resultado;
    }

    public function obtener_usuarios($idUsuario = 0)
    {
        $resultado = $this
            ->select('idInquilino  , nombre_inquilino, apellido_paterno_inquilino, apellido_materno_inquilino, email_inquilino,numero_telefono_inquilino, conctacto_emergencia_inquilino, idDepartamento ,  idAlquiler , idRol, sexo_inquilino')
            ->where('idInquilino ', $idUsuario)
            ->first();
        return $resultado;
    }

    public function existe_usuario_id($idUsuario = null)
    {
        //Generamos la consulta SQL
        $resultado = $this
            ->select('idInquilino')
            ->where('idInquilino', $idUsuario)
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
            ->where(["idInquilino" => $id_usuario])
            ->set($data)
            ->update();
    } //end updateDos

    public function updateEstatus($data = array(), $idInquilino = 0)
    {
        return $this->db->table($this->table)
            ->where(["idInquilino" => $idInquilino])
            ->set($data)
            ->update();
    } //end updateDos

    public function deleteUser($id_usuario = 0)
    {
        return $this->db->table($this->table)
            ->where(["idInquilino" => $id_usuario])
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
            ->select('sexo_inquilino')
            ->where('idInquilino', $idAdministrador)
            ->first();

        $opcion = $resultado;

        return $opcion->sexo_administrador;
    } //end encontrar_usuario
}
