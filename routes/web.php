<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. 
    Route::get('/', function () {
    return view('welcome');
    });
    Route::get('Principal', function () {
    return view('principal');
    });
    Route::get('Registro', function () {
    return view('registro');
    });
*/

Route::get('principal',[controladorVistas::class, 'vwPrincipal']);

Route::get('registro',[controladorVistas::class, 'vwRegistro']);

Route::get('autores',[controladorVistas::class, 'vwAutores']);

Route::post('RegistrarLibro',[controladorVistas::class,'validarFormulario'])->name('Registrar');

Route::post('RegistrarAutor',[controladorVistas::class,'validarFormulario2'])->name('RegistrarA');
