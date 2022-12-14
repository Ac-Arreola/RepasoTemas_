<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validarLibro;
use App\Http\Requests\validarAutor;

class controladorVistas extends Controller

{

public function validarFormulario(validarLibro $req){
    //return 'info recibida'
    return redirect('registro')
    ->with('Confirmacion','Datos enviados')
    ->with('title',$req->txtTitulo);
    
}
 
public function validarFormulario2(validarAutor $req){
    //return 'info recibida'
    return redirect('autores')
   ->with('confirmación','Datos enviados')
   ->with('name',$req->txtFName);
    ;
}
public function vwPrincipal(){
    return view('principal');
}

public function vwRegistro(){
    return view('registro');
}

public function vwAutores(){
    return view('registrarAutor');
}

}
