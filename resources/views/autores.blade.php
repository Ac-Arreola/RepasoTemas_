@extends('plantilla')


@section('contenido')

 <!-- SI EN LA SESIÓN HAY UNA CONFIRMACION SE MUESTRA EL ALERT DE SWEETALERT-->

 @if(session()->has('Confirmacion'))
 
 <?php $nombre = session()->get('name') ?>

            <script>  Swal.fire(
                'Todo correcto: ',
                'El autor <?php echo e($nombre); ?> ha sido guardado correctamente',
                'success'
            ) </script> 
       
    @endif

<div class="container mt-5 col-md-7">
    <h1 class="display-2 text-center mb-5 fw-bold"> Registrar autores </h1>

    @if ($errors->any())
    @foreach ($errors->all() as $error)    
    
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{ $error }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endforeach
    @endif
        
   

    <div class="card text-center  mb-5 ">

        <div class="card-header fw-bold"> 
           REGISTRAR NUEVO AUTOR
        </div>

        <div class="card-body">
            <form  class="m-4" method="post" action="RegistrarAutor">
                
                @csrf

                <div class="mb-3">
                    <label class="form-label fw-bold" > Nombre completo : </label>
                    <input  type="text" class="form-control"
                                    name="txtFName" 
                                    placeholder="ingrese el nombre completo del autor" 
                                    value="{{old('txtFName')}}"
                                    />
                                   <p class="text-warning fst-italic fw-bold">
                                    {{$errors->first('txtFName')}}
                                   </p> 
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold" > Fecha de nacimiento : </label>
                    <input  type="text" class="form-control"
                                    name="txtDBorn" 
                                    placeholder="ingrese la fecha de nacimiento del autor" 
                                    value="{{old('txtDBorn')}}"
                                    />
                                    <p class="text-warning fst-italic fw-bold">
                                    {{$errors->first('txtDBorn')}}
                                    </p> 
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold"> No. Libros publicados : </label>
                    <input  type="text" class="form-control"
                                    name="txtNLibros" 
                                    placeholder="ingrese el numero de libros publicados por el autor" 
                                    value="{{old('txtNLibros')}}"
                                    />
                                    <p class="text-warning fst-italic fw-bold">
                                    {{$errors->first('txtNLibros')}}
                                    </p> 
                </div>
                
        </div>

        <div class="card-footer text-muted">
            <div class="d-grid gap-2 col-6 mx-auto mt-2 mb-2">
                <button class="btn btn-warning fw-bold" type="submit"> Guardar Autor </button>
        </div>
        
    </form>
        </div>

      </div>

</div>

@endsection