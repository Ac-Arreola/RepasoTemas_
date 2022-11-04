@extends('plantilla')


@section('contenido')

 <!-- SI EN LA SESIÓN HAY UNA CONFIRMACION SE MUESTRA EL ALERT DE SWEETALERT-->

 @if(session()->has('Confirmacion'))
 
 <?php $titulo=session()->get('title') ?>

            <script>  Swal.fire(
                'Todo correcto: ',
                'El libro <?php echo e($titulo); ?> ha sido guardado correctamente',
                'success'
            ) </script> 
       
    @endif

<div class="container mt-5 mb-5 col-md-7 "> 
    <div class="card shadow-sm mb-5 fw-bold fst-italic " > 

    <div class="card-header fw-bold font-monospace text-center text-light" style="background: cadetblue">
        <h3> Registrar nuevo libro </h3>
    </div>

    @if($errors->any())

    @foreach($errors->all() as $error)


    @endforeach
    
    @endif
    
        <div class="card-body">
            <div class="container mt-2 mb-2">

 <!-- INICIA FORMULARIO MÉTODO POST ENVÍA A RUTA -->
        <form class="m-4" method="post" action="RegistrarLibro" >
            @csrf
            <p><em> De favor, rellena lo que se te pide . </em></p>
 <!-- Primer input --> 
            <div class="mb-3">
                <label class="form-label fw-bold"> ISBN: </label>
                <input type="text" class="form-control"
                 name="txtIsbn" 
                 id="" 
                 value="{{old('txtIsbn')}}"
                 placeholder="Ingresa el ISBN del libro"> 
                 <p class="text-info fst-italic fw-bold"> 
                     {{ $errors->first('txtIsbn') }} </p>
            </div>
 <!-- Segundo input --> 
            <div class="mb-3">
                <label class="form-label"> Titulo de Libro: </label>
                <input type="text" class="form-control" 
                name="txtTitulo" 
                id="" 
                value="{{old('txtTitulo')}}" 
                placeholder="Ingresa el título del libro">
                <p class="text-info fst-italic fw-bold"> 
                    {{ $errors->first('txtTitulo') }} </p>
            </div>
 <!-- Tercer input --> 
            <div class="mb-3">
                <label class="form-label"> Autor: </label>
                <input type="text" class="form-control" 
                name="txtAutor" 
                id="" 
                value="{{old('txtAutor')}}" 
                placeholder="Ingresa el Autor del libro">
                <p class="text-info fst-italic fw-bold"> 
                    {{ $errors->first('txtAutor') }} </p>
            </div>
 <!-- Cuarto input --> 
            <div class="mb-3">
                <label class="form-label"> Numero de Páginas: </label>
                <input type="number" class="form-control" 
                name="txtPaginas" 
                id="" 
                value="{{old('txtPaginas')}}" 
                placeholder="Ingresa el número de páginas del libro">
                <p class="text-info fst-italic fw-bold"> 
                    {{ $errors->first('txtPaginas') }} </p>
            </div>
 <!-- Quinto input --> 
            <div class="mb-3">
                <label class="form-label"> Editorial : </label>
                <input type="text" class="form-control" 
                name="txtEditorial" 
                id="" 
                value="{{old('txtEditorial')}}" 
                placeholder="Ingresa la Editorial del libro">
                <p class="text-info fst-italic fw-bold"> 
                    {{ $errors->first('txtEditorial') }} </p>
            </div>
 <!-- Sexto input --> 
            <div class="mb-3">
                <label class="form-label"> Email de Editorial: </label>
                <input type="email" class="form-control" 
                name="txtEmail" 
                id="" 
                value="" 
                placeholder="Ingresa el email de la editorial">
                <p class="text-info fst-italic fw-bold"> 
                    {{ $errors->first('txtEmail') }} </p>
            </div>
 <!-- BOTÓN --> 
            <div class="text-center">
                <button type="submit" class="btn btn-secondary mt-3">GUARDAR REGISTRO</button>

            </div>
            
            </div>
        </div>

    </div>
</div>










@endsection