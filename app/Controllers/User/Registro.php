<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Registro extends BaseController
{
    //definir constructor para usar el helper de formularios
    public function __construct()
    {
        helper('form');
    }

    public function registro()
    {
        return view('User/registro');
    }

}