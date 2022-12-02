@extends('plantilla')

@section('contenido')
{{-- SweetAlert --}}

@if (session()->has('confirmación'))
    <?php $titulo = session()->get('titulo')?>
    {!!"<script>Swal.fire(
        'Correcto!',
        'Se ha registrado {$titulo} correctamente!',
        'success'
      )</script>"!!}
      
@endif


{{-- Manejo de errores --}}




{{-- Formulario --}}
<div class="container mt-5 col-md-7 ">

  <div class="card text-center card shadow-sm mb-3 fw-bold ">
    <div class="card-header fw-bold"> 
      <h3>  ACTUALIZAR LIBRO </h3>
     </div>
    <div class="card-body">
        <form action="{{route('libroUpdate',$consultaID->idLibro)}}" method="post">
            @csrf
            {!!method_field('PUT')!!}
            <div class="mb-3">
              <label for="isbn" class="form-label">ISBN</label>
              <input type="text" class="form-control" id="isbn"  name="txtIsbn" 
              value="{{$consultaID->isbnLibro}}">
              <p class="text-primary fst-italic">{{$errors->first('txtIsbn')}}</p>
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" class="form-control" id="titulo" name="txtTitulo" 
                value="{{$consultaID->tituloLibro}}">
                <p class="text-primary fst-italic">{{$errors->first('txtTitulo')}}</p>
            </div>
            

            <div class=""><label for="autor" class="form-label">Autor</label></div>
            <select class="form-select" aria-label="Default select example" id="autor" 
            name="txtAutor">
                <option selected disabled>Selecciona...</option>
                @foreach ($consultaAutores as $autor)
                <option value="{{$autor->nombreAutor}}">{{$autor->nombreAutor}}</option>
                @endforeach
              </select>
            <p class="text-primary fst-italic">{{$errors->first('txtAutor')}}</p>
            
            <div class="mb-3">
                <label for="paginas" class="form-label">Páginas</label>
                <input type="text" class="form-control" id="paginas" name="txtPaginas" 
                value="{{$consultaID->paginasLibro}}">
                <p class="text-primary fst-italic">{{$errors->first('txtPaginas')}}</p>
            </div>
            <div class="mb-3">
                <label for="editorial" class="form-label">Editorial</label>
                <input type="text" class="form-control" id="editorial" name="txtEditorial" 
                value="{{$consultaID->editorialLibro}}">
                <p class="text-primary fst-italic">{{$errors->first('txtEditorial')}}</p>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail de la editorial</label>
                <input type="email" class="form-control" id="email" name="txtEmail" 
                value="{{$consultaID->emailLibro}}">
                <p class="text-primary fst-italic">{{$errors->first('txtEmail')}}</p>
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
