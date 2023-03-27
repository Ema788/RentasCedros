<?php

namespace App\Models;

use CodeIgniter\Model;
//sha2('password', 0);
class Tabla_pagos extends Model
{
    //Configuracion esencial
    protected $table = 'alquileres';
    protected $primarykey = 'idAlquiler';
    //Objeto ya esta instanciado
    //Atributos de esa entidad
    protected $returnType = 'object';
    //Depende de los campos de la entidad
    protected $allowedFields = [
        'total_pago_alquiler',
        'idAdministrador',
        'idInquilino',
        'estatus_alquiler'
    ];

    public function data_table_boletos()
    {
        //se pone 0 para no definir el id del usuario
        $resultado = $this->select('alquileres.idAlquiler, 
        alquileres.total_pago_alquiler,
        alquileres.idAdministrador,
        alquileres.idInquilino,
        alquileres.estatus_alquiler,
        administradores.nombre_administrador, 
        administradores.apellido_paterno_administrador,
        administradores.apellido_materno_administrador,
        inquilinos.nombre_inquilino,
        inquilinos.apellido_paterno_inquilino,
        inquilinos.apellido_materno_inquilino')
                                        ->join('administradores', 'administradores.idAdministrador = alquileres.idAdministrador')
                                        ->join('inquilinos', 'inquilinos.idInquilino = alquileres.idInquilino')
                                        ->groupBy('alquileres.idAlquiler')
                                        ->findAll();
        return $resultado;
    }

}
