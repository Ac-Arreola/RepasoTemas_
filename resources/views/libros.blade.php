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

<h1 class="text-center mt-5 fw-bold">✧ LIBROS ✧</h1>


{{-- Libros --}}
<div class="container mt-5">
  <div class="card">
      <div class="card-body">
          <table class="table text-center mt-3"  style="background: rgba(12, 172, 180, 0.692)">
              <thead class="table-active">
                <tr>
                  <th scope="col">ISBN:</th>
                  <th scope="col">Título: </th>
                  <th scope="col">No. páginas: </th>
                  <th scope="col">Acciones:</th>
                </tr>
              </thead>
              <tbody class="table table-info" >
                  @foreach ($consultarLibros as $libros)
                  <tr>
                      <th scope="row">{{$libros->isbnLibro}}</th>
                      <td >{{$libros->tituloLibro}}</td>
                      <td >{{$libros->paginasLibro}}</td>
                      <td>
                          <a type="button" 
                            href="{{route('libroEdit',$libros->idLibro)}}" 
                            class="btn btn-outline-light"
                            style="background: rgb(59, 177, 196)" >
                            <img src="{{asset('img\editar.png')}}" alt="" width="20" height="20">
                            Editar</a>
                          <a type="button" class="btn btn-outline-light"
                           style="background: rgb(189, 21, 80)" 
                            href="{{route('libroShow',$libros->idLibro)}}">
                            <img src="{{asset('img\borrar.png')}}" alt="" width="20" height="20">
                            Eliminar</a>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
            </table>
      </div>
  </div>
</div>
  


@stop
