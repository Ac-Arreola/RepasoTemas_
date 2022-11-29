<?php

namespace App\Http\Controllers;

use App\Http\Requests\validarAutor;
use Illuminate\Http\Request;
use DB;

class controladorAutores extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultaAutores = DB::table('tb_autores')->get();
        return view('autores', compact('consultaAutores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    #AUN NO SE REALIZA 
    public function create()
    {
        return view('registrarAutor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validarAutor $request)
    {
        DB::table('tb_autores')->insert([
            "nombreAutor" => $request->input('txtFName'),
            "fechaNacimientoAutor" => $request->input('txtDBorn'),
            "librosAutor" =>  $request->input('txtNLibros'),
        ]);
        return redirect('autores/index')->with('confirmación','abc')->with('name',$request->txtFName);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    #AUN NO SE REALIZA ES PARA MOSTRAR AL MOMENTO DE ELIMINAR
    public function show($id)
    {
        $consultaID = DB::table('tb_autores')->where('idAutor',$id)->first();
        return view('eliminarAutor', compact('consultaID'));
       }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    #AUN NO SE REALIZA 
    public function edit($id)
    {
        $consultaAutor = DB::table('tb_autores')->where('idAutor',$id)->first();
        return view('editarAutor', compact('consultaAutor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     #AUN NO SE REALIZA 
    public function update(validarAutor $request, $id)
    {
        DB::table('tb_autores')->where('idAutor',$id)->update([
            "nombreAutor" => $request->input('txtFName'),
            "fechaNacimientoAutor" => $request->input('txtDBorn'),
            "librosAutor" =>  $request->input('txtNLibros'),
           
        ]);
        return redirect('autores/index')->with('edición','abc')->with('titulo',$request->txtFName);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    #AUN NO SE REALIZA 
    public function destroy($id)
    {
        DB::table('tb_autores')->where('idAutor',$id)->delete();
        return redirect('autores/index')->with('eliminación','abxc');
    }


    public function librosPublicados($id)
    {
        $consultarLibros = DB::table('tb_libros')->where('autorLibro',$id)->get();
        return view('autorLibros',compact('consultarLibros'));
    }
}
