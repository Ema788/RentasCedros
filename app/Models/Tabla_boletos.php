<?php

namespace App\Models;

use CodeIgniter\Model;
//sha2('password', 0);
class Tabla_boletos extends Model
{
    //Configuracion esencial
    protected $table = 'boletos';
    protected $primarykey = 'idBoleto';
    //Objeto ya esta instanciado
    //Atributos de esa entidad
    protected $returnType = 'object';
    //Depende de los campos de la entidad
    protected $allowedFields = [
        'fecha',
        'hora',
        'precio',
        'asiento',
        'idSalaProyectaPeliculas',
        'idUsuario'
    ];

    public function data_table_boletos()
    {
        //se pone 0 para no definir el id del usuario
        $resultado = $this->select('usuarios.nombre, 
                                    usuarios.aP,
                                    usuarios.aM,
                                    boletos.asiento, 
                                    boletos.fecha, 
                                    boletos.precio, 
                                    peliculas.nombrePelicula, 
                                    horarioPeliculas.horaEmpieza, 
                                    horarioPeliculas.horaFinaliza, 
                                    salas.tipoSala, 
                                    sucursales.nombreSucursal')
                                        ->join('usuarios', 'boletos.idUsuario = usuarios.idUsuario')
                                        ->join('salasproyectanpeliculas', 'boletos.idSalaproyectapeliculas=salasproyectanpeliculas.idsalaproyectapeliculas')
                                        ->join('peliculas', 'salasproyectanpeliculas.idPelicula=peliculas.idPelicula')
                                        ->join('horariopeliculas', 'boletos.idHorarioPeliculas=horariopeliculas.idHorarioPeliculas')
                                        ->join('salas', 'salasproyectanpeliculas.idSala=salas.idSala')
                                        ->join('sucursales', 'sucursales.idSucursal=salas.idSucursal')
                                        ->groupBy('usuarios.idUsuario')
                                        ->findAll();
        return $resultado;
    }
}
