@extends('layout.plantilla')

@section('contenido')
<section class="container">
    <div class="container-fliud">
        <div class="row align-items-center mt-3">
            <div class="col text-center card-header text-uppercase fw-bold" style="background-color: #F0C2BE; font-family: Girassol; font-size: 50px;">                
                actividades
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-4 text-center">
                <img src="{{ asset('images/yoga.png') }}" alt="Yoga" style="height: 205px; width: 286;">
                <h3 class="fs-5 text-uppercase" style="font-familiy: Delius; font-size: 20">Yoga</h3> 
            </div>
        
            <div class="col-4 text-center">
                <img style="height: 205px" src="{{ asset('images/acondicionamiento.png') }}" alt="Acondicionamiento fisico" style="height: 205px; width: 286;">
                <h3 class="fs-5 text-uppercase" style="font-familiy: Delius; font-size: 20">Acondicioamiento fisico</h3>   
            </div>
        
            <div class="col-4 text-center">
                <img src="{{ asset('images/zumba.png') }}" alt="Acondicionamiento fisico" style="height: 205px; width: 286;">
                <h3 class="fs-5 text-uppercase" style="font-familiy: Delius; font-size: 20">Zumba</h3>  
            </div>
        </div>
    
        <div class="row justify-content-center mt-5">
            <div class="col-4 text-center">
                <img src="{{ asset('images/terapia.png') }}" alt="Terapia psicologica" style="height: 205px; width: 286;">
                <h3 class="fs-5 text-uppercase" style="font-familiy: Delius; font-size: 20">Terapia psicologica individual o grupal</h3>
            </div>
            <div class="col-4 text-center">
                <img src="{{ asset('images/ajedrez.png') }}" alt="Ajedrez" style="height: 205px; width: 286;">
                <h3 class="fs-5 text-uppercase" style="font-familiy: Delius; font-size: 20">Ajedrez</h3>
            </div>
        </div>
    </div>        
</section>
@endsection