@extends('plantilla')

@section('contenido')
{{-- SweetAlert --}}


{{-- Libros --}}

<div class="card display-center mt-5">
    <div class="card-body">
       <h1>¿Seguro que quieres eliminar {{$consultaID->tituloLibro}}?</h1>
    </div>
    <form action="{{route('libroDestroy', $consultaID->idLibro)}}" method="post">
        @csrf
        @method('delete')
        <div class="card-footer">
            <a type="button" class="btn btn-success" href="{{route('libroIndex')}}">Cancelar</a>
            <button type="submit" class="btn btn-danger">Si, eliminar</button>
        </div>
    </form>
    
</div>

  


@stop
