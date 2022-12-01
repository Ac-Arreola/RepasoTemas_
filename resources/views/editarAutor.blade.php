@extends('plantilla')

@section('contenido')



{{-- Manejo de errores --}}




{{-- Formulario --}}
<div class="card">
    <div class="card-body">
        <form action="{{route('autorUpdate', $consultaAutor->idAutor)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="NC" class="form-label">Nombre Completo: </label>
              <input type="text" class="form-control" id="NC"  name="txtFName" 
              value="{{$consultaAutor->nombreAutor}}">
              <p class="text-primary fst-italic">{{$errors->first('txtFName')}}</p>
            </div>
            <div class="mb-3">
                <label for="FN" class="form-label">Fecha de nacimiento:</label>
                <input type="date" class="form-control" id="FN" name="txtDBorn" 
                value="{{$consultaAutor->fechaNacimientoAutor}}">
                <p class="text-primary fst-italic">{{$errors->first('txtDBorn')}}</p>
            </div>
            <div class="mb-3">
                <label for="LP" class="form-label">Libros publicados:</label>
                <input type="text" class="form-control" id="LP" name="txtNLibros" 
                value="{{$consultaAutor->librosAutor}}">
                <p class="text-primary fst-italic">{{$errors->first('txtNLibros')}}</p>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
          </form>
    </div>
  </div>

  


@stop
