<?php

namespace App\Models;

use CodeIgniter\Model;
//sha2('password', 0);
class Tabla_boletos extends Model
{
    //Configuracion esencial
    protected $table = 'departamentos';
    protected $primarykey = 'idDepartamento ';
    //Objeto ya esta instanciado
    //Atributos de esa entidad
    protected $returnType = 'object';
    //Depende de los campos de la entidad
    protected $allowedFields = [
        'numero_departamento',
        'numero_muebles_departamento',
        'descripcion_departamento',
        'idAdministrador',
        'estatus_departamento'
    ];

    public function data_table_boletos()
    {
        //se pone 0 para no definir el id del usuario
        $resultado = $this->select('departamentos.idDepartamento, 
        departamentos.numero_departamento,
        departamentos.numero_muebles_departamento,
        departamentos.descripcion_departamento, 
        departamentos.idAdministrador, 
        departamentos.estatus_departamento')
                                        ->groupBy('departamentos.idDepartamento')
                                        ->findAll();
        return $resultado;
    }

    public function existe_usuario($email = null)
    {
        //Generamos la consulta SQL
        $resultado = $this
            ->select('numero_departamento')
            ->where('numero_departamento', $email)
            ->first();

        $opcion = FALSE;

        if ($resultado != NULL) {
            $opcion = TRUE;
        } //end if existe registro

        return $opcion;
    } //end encontrar_usuario
}
