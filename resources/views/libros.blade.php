@extends('plantilla')

@section('contenido')
{{-- SweetAlert --}}

@if (session()->has('confirmación'))
    <?php $titulo = session()->get('titulo')?>
    {!!"<script>Swal.fire(
        'Bien hecho!',
        'Se ha registrado el libro: {$titulo} correctamente!',
        'success'
      )</script>"!!}
      
@endif
@if (session()->has('edición'))
    <?php $titulo = session()->get('titulo')?>
    {!!"<script>Swal.fire(
        'Bien hecho!',
        'Se ha editado el libro: {$titulo} correctamente!',
        'success'
      )</script>"!!}
      
@endif
@if (session()->has('eliminación'))
    {!!"<script>Swal.fire(
        'Bien hecho!',
        'Se ha eliminado el libro correctamente!',
        'success'
      )</script>"!!}
      
@endif


{{-- Manejo de errores --}}




{{-- Libros --}}

<div class="card">
    <div class="card-body">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ISBN</th>
                <th scope="col">Título</th>
                <th scope="col">Autor</th>
                <th scope="col">Acciones:</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($consultarLibros as $libros)
                <tr>
                    <th scope="row">{{$libros->isbnLibro}}</th>
                    <td >{{$libros->tituloLibro}}</td>
                    <td >{{$libros->autorLibro}}</td>
                    <td>
                        <a type="button" href="{{route('libroEdit',$libros->idLibro)}}" class="btn btn-warning">
                          <img src="{{asset('img\editar.png')}}" alt="" width="20" height="20">
                          Editar</a>
                        <a type="button" class="btn btn-danger" href="{{route('libroShow',$libros->idLibro)}}">
                          <img src="{{asset('img\borrar.png')}}" alt="" width="20" height="20">
                          Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>

  


@stop
