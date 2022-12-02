@extends('plantilla')

@section('contenido')
{{-- SweetAlert --}}


{{-- Libros --}}
<div class="container mt-5">
<div class="card display-center mt-5 text-center">
    <div class="card-header fw-bold"> 
        <h3>  ¡autorizar! </h3>
       </div>
    <div class="card-body">
       <h1>¿Seguro que quieres eliminar {{$consultaID->tituloLibro}}?</h1>
    </div>
    <form action="{{route('libroDestroy', $consultaID->idLibro)}}" method="post">
        @csrf
        @method('delete')
        <div class="card-footer">
            <a type="button" class="btn btn-outline-light"
            style="background: rgb(59, 177, 196)"
            href="{{route('libroIndex')}}">CANCELAR</a>
            <button type="submit" class="btn btn-outline-light" 
            style="background: rgb(189, 21, 80)" >
                SI, AUTORIZO</button>
        </div>
    </form>
    
</div>
</div>
  


@stop
