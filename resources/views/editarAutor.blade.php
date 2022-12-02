@extends('plantilla')

@section('contenido')



{{-- Manejo de errores --}}




{{-- Formulario --}}
<div class="container mt-5 col-md-7 ">

<div class="card text-center card shadow-sm mb-3 fw-bold ">
  <div class="card-header fw-bold"> 
    <h3>  ACTUALIZAR AUTOR </h3>
   </div>
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

            <div class="card-footer text-muted">

              <!-- BOTÓN --> 
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                      <button type="submit" class="btn btn-outline-light mt-2"
                      style="background: rgb(59, 177, 196)" > 
                          ACTUALIZAR </button>
              </div>
            </div>
            

          </form>
    </div>
  </div>
</div>

  


@stop
