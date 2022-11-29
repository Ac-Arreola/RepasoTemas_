<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\controladorAutores;
use App\Http\Controllers\controladorLibros;
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

//RUTAS INDIVIDUALES PARA EL CONTROLADOR
//principal
Route::get('/',[controladorVistas::class, 'vwPrincipal']);
//libro
Route::get('registro',[controladorVistas::class, 'vwRegistro']);
//autor
Route::get('registroAutores',[controladorVistas::class, 'vwAutores']);


// RUTAS PARA ENVIO DE POST
// libro
Route::post('RegistrarLibro',[controladorVistas::class,'validarFormulario'])->name('Registrar');
//autor
Route::post('RegistrarAutor',[controladorVistas::class,'validarFormulario2'])->name('RegistrarA');



//RUTAS CONTROLADOR LIBROS
//index
Route::get('libros/index',[controladorLibros::class,'index'])->name('libroIndex');
//create
Route::get('libros/create',[controladorLibros::class,'create'])->name('libroCreate');
//store
Route::post('libros/store',[controladorLibros::class,'store'])->name('libroStore');
//edit
Route::get('libros/{id}/edit',[controladorLibros::class,'edit'])->name('libroEdit');
//update
Route::put('libros/{id}/update',[controladorLibros::class,'update'])->name('libroUpdate');
//show
Route::get('libros/{id}/show',[controladorLibros::class,'show'])->name('libroShow');
//show
Route::delete('libros/{id}/destroy',[controladorLibros::class,'destroy'])->name('libroDestroy');


//Autores
//index
Route::get('autores/index',[controladorAutores::class,'index'])->name('autorIndex');
//create
Route::get('autores/create',[controladorAutores::class,'create'])->name('autorCreate');
//store
Route::post('autores/store',[controladorAutores::class,'store'])->name('autorStore');
//edit
Route::get('autores/{id}/edit',[controladorAutores::class,'edit'])->name('autorEdit');
//update
Route::put('autores/{id}/update',[controladorAutores::class,'update'])->name('autorUpdate');
//show
Route::get('autores/{id}/show',[controladorAutores::class,'show'])->name('autorShow');
//destroy
Route::delete('autores/{id}/destroy',[controladorAutores::class,'destroy'])->name('autorDestroy');
//mostrarLibros
Route::get('autores/{id}/libros',[controladorAutores::class,'librosPublicados'])->name('autorLibros');

