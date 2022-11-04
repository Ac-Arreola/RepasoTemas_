@extends('plantilla')

@section('contenido')

 <h1 class="text-center mt-5 display-2 fw-bold font-monospace"> ✧ Página principal ✧ </h1>
 <h2 class="text-center font-monospace mt-3 text-muted mt-4 "> <em> 📚 Biblioteca LeoSan_Juan  📚 </em></h2>
 
 <div class="text-center" >
 <img src="{{asset('img\bannerWbg.png')}}" width="80%" height="300" role="img" width="100%" height="100%" >
</div>
    <div class="album py-5" >
        <div class="container" >
    
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            
            <div class="col">
              <div class="card shadow-sm">
                <div class="card-header text-center fw-bold font-monospace">
                    <h3>24 de Octubre. Dia de las bibliotecas</h3>
                </div>
                <div class="container mt-3">
                        <img src="https://leseg.files.wordpress.com/2022/09/dia_biblioteca.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" role="img" width="100%" height="100%" fill="#55595c">
                </div>
                <div class="card-body">
                  <p class="card-text">El Día de las Bibliotecas se celebra cada 24 de octubre desde el año 1997. Este día nació […] </p>
                  <br>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://leseg.unav.edu/2022/10/24/24-de-octubre-dia-de-las-bibliotecas/"> Ver Más </a></button>
                    </div>
                    <small class="text-muted">17 hrs</small>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="col">
              <div class="card shadow-sm">
                <div class="card-header text-center fw-bold font-monospace">
                 <h3> Fallece Domingo Villar </h3>
                </div>
                <div class="container mt-3">
                        <img src="https://leseg.files.wordpress.com/2022/05/moliere.png" class="bd-placeholder-img card-img-top" width="100%" height="225" role="img" width="100%" height="100%" fill="#55595c">
                </div>
                <div class="card-body">
                  <p class="card-text">Un día después del Día de las letras gallegas, lengua en la que escribía Domingo Villar, ha fallecido […] </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://leseg.unav.edu/2022/05/18/fallece-domingo-villar/"> Ver Más </a></button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="col">
              <div class="card shadow-sm">
              <div class="card-header text-center fw-bold fw-bold font-monospace">
                <h3> VII Día de las Escritoras </h3>
               </div>
                <div class="container mt-3">
                        <img src="https://leseg.files.wordpress.com/2022/10/vii-edicion-del-dia-de-las-escritoras.png" class="bd-placeholder-img card-img-top" width="100%" height="225" role="img" width="100%" height="100%" fill="#55595c">
                </div>
                <div class="card-body">
                  <p class="card-text">Este 2022 se celebra la séptima edición del Día de la Escritoras. Como de costumbre, cada edición viene […] </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://leseg.unav.edu/2022/10/17/vii-dia-de-las-escritoras/"> Ver Más </a></button>
                    </div>
                    <small class="text-muted"> 2 dias </small>
                  </div>
                </div>
              </div>
            </div>
              </div>
            </div>
        
   </div>
   @endsection
