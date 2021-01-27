@extends('layout.plantilla')

@section('titulo', 'Instalaciones')

@section('contenido')
<section class="container mt-3">
    <div class="container-fluid">
        <h2 class="text-uppercase fw-bold" style="font-family: Girassol; font-size: 60px; text-align: center">instalaciones</h2>

        <div class="row justify-content-start mt-3">
            <div class="col text-center">
                <img 
                    src="{{ asset('images/recepcion.png') }}" 
                    alt="Recepción" 
                    style="height: 219px; width: 329px;"
                    data-bs-toggle="modal" data-bs-target="#modal1">
                <h3 class="fw-bold" style="font-family: Delius; font-size: 34px;">Recepción</h3> 
            </div>
            <div class="col text-center">
                <img src="{{ asset('images/dormitorio.png') }}" 
                    alt="Dormitorio" 
                    style="height: 219px; width: 329px;"
                    data-bs-toggle="modal" data-bs-target="#modal2">
                <h3 class="fw-bold" style="font-family: Delius; font-size: 34px;">Dormitorio</h3> 
            </div>
            <div class="col text-center">
                <img src="{{ asset('images/oficinas.png') }}" 
                    alt="Oficinas" 
                    style="height: 219px; width: 329px;"
                    data-bs-toggle="modal" data-bs-target="#modal3">
                <h3 class="fw-bold" style="font-family: Delius; font-size: 34px;">Oficinas</h3> 
            </div>
            <div class="col text-center mt-5">
                <img src="{{ asset('images/areas.png') }}" 
                    alt="Áreas Recreativas" 
                    style="height: 219px; width: 329px;"
                    data-bs-toggle="modal" data-bs-target="#modal4">
                <h3 class="fw-bold" style="font-family: Delius; font-size: 34px;">Áreas Recreativas</h3>  
            </div>
            <div class="col text-center mt-5">
                <img src="{{ asset('images/patio.png') }}" 
                    alt="Patio" 
                    style="height: 219px; width: 329px;"
                    data-bs-toggle="modal" data-bs-target="#modal5">
                <h3 class="fw-bold" style="font-family: Delius; font-size: 34px;">Patio</h3>  
            </div>
            <div class="col text-center mt-5">
                <img src="{{ asset('images/sala.png') }}" 
                    alt="Sala" 
                    style="height: 219px; width: 329px;"
                    data-bs-toggle="modal" data-bs-target="#modal6">
                <h3 class="fw-bold" style="font-family: Delius; font-size: 34px;">Sala</h3>   
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col text-center">
                <img src="{{ asset('images/enfermeria.png') }}" 
                    alt="Enfermeria" 
                    style="height: 219px; width: 329px;"
                    data-bs-toggle="modal" data-bs-target="#modal7">
                <h3 class="fw-bold" style="font-family: Delius; font-size: 34px;">Enfermeria</h3> 
            </div>
            <div class="col text-center">
                <img src="{{ asset('images/comedor.png') }}" 
                    alt="Comedor" 
                    style="height: 219px; width: 329px;"
                    data-bs-toggle="modal" data-bs-target="#modal8">
                <h3 class="fw-bold" style="font-family: Delius; font-size: 34px;">Comedor</h3> 
            </div>
        </div>

    </div>
</section>


<!--MODAL PARA INSTALACIONES -->

<div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">        
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{ asset('images/recepcion 1.png') }}" class="d-block w-100" alt="Recepcion">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!--MODAL 2 -->
<div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">        
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">                        
                            <img src="{{ asset('images/dormitorio 1.png') }}" class="d-block w-100" alt="Dormitorio 1">
                        </div>
                        <div class="carousel-item">                        
                            <img src="{{ asset('images/dormitorio 2.png') }}" class="d-block w-100" alt="Dormitorio 2">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!--MODAL 3 -->
<div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">        
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="carouselExampleIndicators1" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0" class="active"></li>
                      <li data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="1"></li>
                      <li data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">                        
                        <img src="{{ asset('images/oficina 1.png') }}" class="d-block w-100" alt="oficina 1">
                      </div>
                      <div class="carousel-item">                        
                        <img src="{{ asset('images/oficina 2.png') }}" class="d-block w-100" alt="oficina 2">
                      </div>
                      <div class="carousel-item">                        
                        <img src="{{ asset('images/oficina 3.png') }}" class="d-block w-100" alt="oficina 3">
                    </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </a>
                  </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>

<!--MODAL 4 -->
<div class="modal fade" id="modal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">        
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active"></li>
                      <li data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1"></li>
                      <li data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">                        
                        <img src="{{ asset('images/area 1.png') }}" class="d-block w-100" alt="area 1">
                      </div>
                      <div class="carousel-item">                        
                        <img src="{{ asset('images/area 2.png') }}" class="d-block w-100" alt="area 2">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </a>
                  </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>

<!--MODAL 5 -->
<div class="modal fade" id="modal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">        
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="carouselExampleIndicators3" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="0" class="active"></li>
                      <li data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="1"></li>
                      <li data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">                        
                        <img src="{{ asset('images/patio 1.png') }}" class="d-block w-100" alt="patio 1">
                      </div>
                      <div class="carousel-item">                        
                        <img src="{{ asset('images/patio 2.png') }}" class="d-block w-100" alt="patio 2">
                      </div>
                      <div class="carousel-item">                        
                        <img src="{{ asset('images/patio 3.png') }}" class="d-block w-100" alt="patio 3">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </a>
                  </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>

<!--MODAL 6 -->
<div class="modal fade" id="modal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">        
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="carouselExampleIndicators4" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="0" class="active"></li>
                      <li data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="1"></li>
                      <li data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">                        
                        <img src="{{ asset('images/sala 1.png') }}" class="d-block w-100" alt="sala 1">
                      </div>
                      <div class="carousel-item">                        
                        <img src="{{ asset('images/sala 2.png') }}" class="d-block w-100" alt="sala 2">
                      </div>
                      <div class="carousel-item">                        
                        <img src="{{ asset('images/sala 3.png') }}" class="d-block w-100" alt="sala 3">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators4" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators4" role="button" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </a>
                  </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>

<!--MODAL 7 -->
<div class="modal fade" id="modal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">        
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">                
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleIndicators5" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleIndicators5" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleIndicators5" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">                        
                    <img src="{{ asset('images/enfermeria 1.png') }}" class="d-block w-100" alt="enfermeria 1">
                    </div>
                </div>                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!--MODAL 8 -->
<div class="modal fade" id="modal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">        
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="carouselExampleIndicators6" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-bs-target="#carouselExampleIndicators6" data-bs-slide-to="0" class="active"></li>
                      <li data-bs-target="#carouselExampleIndicators6" data-bs-slide-to="1"></li>
                      <li data-bs-target="#carouselExampleIndicators6" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">                        
                        <img src="{{ asset('images/comedor 1.png') }}" class="d-block w-100" alt="comedor 1">
                      </div>
                      <div class="carousel-item">                        
                        <img src="{{ asset('images/comedor 2.png') }}" class="d-block w-100" alt="comedor 2">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators6" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators6" role="button" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </a>
                  </div>
            </div>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection