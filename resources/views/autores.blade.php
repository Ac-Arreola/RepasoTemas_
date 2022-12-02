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

<h1 class="text-center mt-5 fw-bold">✧ AUTORES ✧</h1>

{{-- autores --}}
<div class="container mt-5">
<div class="card">
    <div class="card-body">
        <table class="table text-center mt-3"  style="background: rgba(12, 172, 180, 0.692)">
            <thead class="table-active">
              <tr>
                <th scope="col">Autor:</th>
                <th scope="col">Fecha de Nacimiento:</th>
                <th scope="col">Libros:</th>
                <th scope="col">Acciones:</th>
              </tr>
            </thead>
            <tbody class="table table-info">
                @foreach ($consultaAutores as $autor)
                <tr>
                    <th scope="row">{{$autor->nombreAutor}}</th>
                    <td >{{$autor->fechaNacimientoAutor}}</td>
                    <td ><a type="button" class="btn btn-outline-light" style="background: rgb(142, 65, 201)" 
                        href="{{route('autorLibros',$autor->nombreAutor)}}"> 
                        <img src="{{asset('img\vision.png')}}" alt="" width="20" height="20">
                        Ver libros</a></td>
                    <td>
                        <a type="button" href="{{route('autorEdit',$autor->idAutor)}}" 
                            class="btn btn-outline-light"
                            style="background: rgb(59, 177, 196)" >
                            <img src="{{asset('img\editar.png')}}" alt="" width="20" height="20">
                            Editar</a>
                        <a type="button" class="btn btn-outline-light"
                        style="background: rgb(189, 21, 80)"  
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
</div>

@endsection