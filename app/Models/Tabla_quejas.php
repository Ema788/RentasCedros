<?php

namespace App\Models;

use CodeIgniter\Model;
//sha2('password', 0);
class Tabla_quejas extends Model
{
    //Configuracion esencial
    protected $table = 'quejas';
    protected $primarykey = 'idQueja';
    //Objeto ya esta instanciado
    //Atributos de esa entidad
    protected $returnType = 'object';
    //Depende de los campos de la entidad
    protected $allowedFields = [
        'fecha_registro_queja',
        'descripcion_queja',
        'idInquilino',
        'estatus_queja'
    ];

    public function data_table_boletos()
    {
        //se pone 0 para no definir el id del usuario
        $resultado = $this->select('quejas.idQueja, 
        quejas.fecha_registro_queja,
        quejas.descripcion_queja,
        quejas.idInquilino,
        quejas.estatus_queja,
        inquilinos.nombre_inquilino,
        inquilinos.apellido_paterno_inquilino,
        inquilinos.apellido_materno_inquilino')
                                        ->join('inquilinos', 'inquilinos.idInquilino = quejas.idInquilino')
                                        ->findAll();
        return $resultado;
    }

}
