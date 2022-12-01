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
<div class="card">
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
            <button type="submit" class="btn btn-primary">Actualizar</button>
          </form>
    </div>
  </div>

  


@stop
