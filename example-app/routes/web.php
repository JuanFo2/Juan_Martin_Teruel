<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\PaisController;


Route::get('/usuarios' , [UsuariosController::class,'index']);

Route::resource ('/paises' , PaisController::class);

Route::get('/saludo', function () {
    echo "hola mundo";
});


Route::get('/saludo/vista', function () {
    return view('hola');
});
Route::get('/saludo/controller/{nombre}', [SaludoController::class,'index']);