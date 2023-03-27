<?php

namespace App\Models;

use CodeIgniter\Model;
//sha2('password', 0);
class Tabla_trabajadores extends Model
{
    //Configuracion esencial
    protected $table = 'trabajadores';
    protected $primarykey = 'idTrabajador';
    //Objeto ya esta instanciado
    //Atributos de esa entidad
    protected $returnType = 'object';
    //Depende de los campos de la entidad
    protected $allowedFields = [
        'nombre_trabajador',
        'apellido_paterno_trabajador',
        'apellido_materno_trabajador',
        'puesto_trabajador',
        'idAdministrador',
        'idRol',
        'estatus_trabajador',
        'sexo_trabajador'
    ];

    public function data_table_trabajadores()
    {
        //se pone 0 para no definir el id del usuario
        $resultado = $this->select('trabajadores.idTrabajador, 
        trabajadores.nombre_trabajador,
        trabajadores.apellido_paterno_trabajador,
        trabajadores.apellido_materno_trabajador,
        trabajadores.puesto_trabajador,
        trabajadores.estatus_trabajador,
        trabajadores.idRol,
        trabajadores.sexo_trabajador,
        roles.nombre_rol,
        trabajadores.idAdministrador,
        administradores.nombre_administrador, 
        administradores.apellido_paterno_administrador,
        administradores.apellido_materno_administrador')
            ->join('roles', 'roles.idRol = trabajadores.idRol')
            ->join('administradores', 'administradores.idAdministrador = trabajadores.idAdministrador')
                                        ->findAll();
                                        
        return $resultado;
    }

}