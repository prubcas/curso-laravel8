<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function adminUsers()
    {
        return "Administrando usuarios";
    }

    public function adminProfile($user)
    {
        return "Cambiando el perfil del usuario {$user}";
    }
}
