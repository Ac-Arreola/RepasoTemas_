<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validarLibro;

class controladorVistas extends Controller

{

public function validarFormulario(validarLibro $req){
    //return 'info recibida'
    return redirect('registro')->with('Confirmacion','Datos enviados');
}

public function vwPrincipal(){
    return view('principal');
}

public function vwRegistro(){
    return view('registro');
}

}
