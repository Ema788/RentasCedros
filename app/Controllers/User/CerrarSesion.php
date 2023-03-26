<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class CerrarSesion extends BaseController
{
    public function index()
    {
        session()->destroy();
        return redirect()->to(route_to('login'));
    }
}
?>
