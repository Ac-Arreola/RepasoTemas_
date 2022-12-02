@extends('plantilla')


@section('contenido')

 <!-- SI EN LA SESIÓN HAY UNA CONFIRMACION SE MUESTRA EL ALERT DE SWEETALERT-->


<div class="container mt-5 col-md-7">

    @if ($errors->any())
    @foreach ($errors->all() as $error)    
    
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{ $error }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endforeach
    @endif
        
   

    <div class="card text-center card shadow-sm mb-3 fw-bold  ">

        <div class="card-header fw-bold"> 
         <h3>  REGISTRAR NUEVO AUTOR </h3>
        </div>

        <div class="card-body">
            <form  class="m-4" method="post" action="{{route('autorStore')}}">
                
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
                    <input  type="date"  class="form-control"
                                    name="txtDBorn"  
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

        <!-- BOTÓN --> 
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-outline-light mt-2 mb-2"
                style="background: rgb(59, 177, 196)" > 
                    GUARDAR AUTOR </button>
        </div>
        
    </form>
        </div>

      </div>

</div>

@endsection