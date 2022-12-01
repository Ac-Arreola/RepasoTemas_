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
    <?php $nombre = session()->get('name')?>
    {!!"<script>Swal.fire(
        'Bien hecho!',
        'Se ha editado el autor: {$nombre} correctamente!',
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
                    <td ><a type="button" class="btn btn-outline-light" style="background: rgb(66, 165, 187)" 
                        href="{{route('autorLibros',$autor->nombreAutor)}}"> 
                        <img src="{{asset('img\vision.png')}}" alt="" width="20" height="20">
                        Ver libros</a></td>
                    <td>
                        <a type="button" href="{{route('autorEdit',$autor->idAutor)}}" 
                            class="btn btn-warning">
                            <img src="{{asset('img\editar.png')}}" alt="" width="20" height="20">
                            Editar</a>
                        <a type="button" class="btn btn-danger" 
                        href="{{route('autorShow',$autor->idAutor)}}">
                        <img src="{{asset('img\borrar.png')}}" alt="" width="20" height="20">
                        Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>

@endsection