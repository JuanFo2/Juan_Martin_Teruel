<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = [["id => 1", "nombre" => "juan", "apellido" => "ojeda"],["id => 1", "nombre" => "juan", "apellido" => "ojeda"]];
        return view("usuarios")->with("usuarios", $usuarios);
    }
}
