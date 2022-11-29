@extends('plantilla')


@section('contenido')

 <!-- SI EN LA SESIÓN HAY UNA CONFIRMACION SE MUESTRA EL ALERT DE SWEETALERT-->

 @if(session()->has('confirmación'))
 
 <?php $nombre = session()->get('name') ?>

            <script>  Swal.fire(
                'Bien hecho! ',
                'El autor : <?php echo e($nombre); ?> ha sido guardado correctamente',
                'success'
            ) </script> 
       
    @endif
    
    @if (session()->has('edición'))
    <?php $titulo = session()->get('titulo')?>
    {!!"<script>Swal.fire(
        'Bien hecho!',
        'Se ha editado el autor: {$titulo} correctamente!',
        'success'
      )</script>"!!}
      
@endif
@if (session()->has('eliminación'))
    {!!"<script>Swal.fire(
        'Bien hecho!',
        'Se ha eliminado el autor correctamente!',
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
                <th scope="col">Autor:</th>
                <th scope="col">Fecha de Nacimiento:</th>
                <th scope="col">Libros:</th>
                <th scope="col">Acciones:</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($consultaAutores as $autor)
                <tr>
                    <th scope="row">{{$autor->nombreAutor}}</th>
                    <td >{{$autor->fechaNacimientoAutor}}</td>
                    <td ><a type="button" class="btn btn-success" 
                        href="{{route('autorLibros',$autor->nombreAutor)}}">Ver libros</a></td>
                    <td>
                        <a type="button" href="{{route('autorEdit',$autor->idAutor)}}" 
                            class="btn btn-warning">Editar</a>
                        <a type="button" class="btn btn-danger" 
                        href="{{route('autorShow',$autor->idAutor)}}">Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>

@endsection