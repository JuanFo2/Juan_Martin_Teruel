<?php

namespace App\Http\Controllers;
use App\Models\Pais;
use Illuminate\Http\Request;

class PaisController extends Controller
{
    public function index()
    {
      $paises = Pais::all();
    return view("index")->with("paises", $paises);

    }
     public function create()
    {
        return view("create");
    }
     public function store(Request $request)
{
    Pais::create($request->all());

    return redirect()
        ->route('paises.index')
        ->with('success', 'País creado correctamente.');
}
}
