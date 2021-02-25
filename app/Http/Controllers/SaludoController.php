<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    public function saludar($name = "mundo")
    {
        return view('saludar')->with([
            'name' => $name,
            'text' => 'Bienvenidos',
        ]);
    }
}
