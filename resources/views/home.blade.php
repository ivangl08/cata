@section('headerInicio')
<header class="container mt-3 mb-3">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-3">
                <img src="{{ asset('images/Guerreros de la paz1 RGB.png') }}" alt="Guerreros La Paz A.C.">
            </div>
            <div class="text-center col-7">
                <h1 class="mt-4 fw-bold text-uppercase" style="font-family: Girassol; font-size: 44px">
                    centro de atención para el tratamiento de las adicciones guerreros la paz a.c.
                </h1>
            </div>
        </div>
    </div>
</header>
@endsection
@extends('layout.plantilla')

@section('titulo', 'Inicio')

@section('contenido')
<section class="container mt-3">
    <div class="container-fluid">
        <p style="text-align: justify; font-familiy: Delius; font-size: 22px;">
            El Centro de Atención para el Tratamiento de las Adicciones Guerreros La Paz A.C. esta registrado ante el 
            Instituto para la Atención y Prevención de las Adicciones en la CDMX y cuenta con el registro IAPA/000028,
            así como el Reconocimiento RCEN-DF-0622 por parte de CONADIC por cumplir con la Norma Oficial 
            Mexicana NOM-028-SSA2-2009 para la prevención, tratamiento y control de las adicciones y de la Ley para
            la Atención Integral del Consumo de Sustancias Psicoactivas del Distrito Federal.
        </p>
        <div class="row mt-2">
            <div class="col-3">
            <h2 class="text-uppercase fw-bold" style="font-family:Girassol; font-size: 35px;">criterio de inclusión</h2>
        </div>
        <div class="col-9 text-start" style="text-align: justify; font-familiy: Delius; font-size: 22px;">
            <P>Hombres de entre 18 y 60 años de edad que presenten dependencia a una o varias sustancias.</P>
        </div> 
    
        <div class="row">
            <div class="col-4 mt-3 text-center">
                <img src="{{ asset('images/tratamiento.png') }}" alt="Tratamiento" style="width: 286px; height: 205px;">
                <h3 class="text-uppercase mt-2" style="font-familiy: Delius; font-size: 28px;">tratamiento</h3>    
            </div>
            
            <div class="col-4 mt-3 text-center">
                <img src="{{ asset('images/intervenciones.png') }}" alt="Intervenciones" style="width: 286px; height: 205px;">
                <h3 class="text-uppercase mt-2" style="font-familiy: Delius; font-size: 28px;">intervenciones</h3>   
            </div>
            
            <div class="col-4 mt-3 text-center">
                <img src="{{ asset('images/dormitorio.png') }}" alt="Tratamiento" style="width: 286px; height: 205px;">
                <h3 class="text-uppercase mt-2" style="font-familiy: Delius; font-size: 28px;">instalaciones</h3>    
            </div>
        </div>
        <div class="row">
            <div class="col-4 text-center">
                <p style="text-align: justify; font-familiy: Delius; font-size: 18px">
                    El Centro de Atención para el Tratamiento de 
                    las Adicciones Guerreros La Paz A. C. ofrece
                    un modelo del tratamiento en residencia; 
                    cuyo objeto es conseguir la abstinencia total,
                    el tratamiento proporcionado enfatiza la 
                    parte de la psique humana proporcionada
                    por el programa de recuperación de alcohólicos anónimos...
                </p>                
            </div>        
            <div class="col-4 text-center">
                <p style="text-align: justify font-familiy: Delius; font-size: 18px">
                    Valoración Médica | Ayuda Mutua | Terapia Psicológica |<br> 
                    Auto-Análisis de la personalidad | Más estrategias de Intervención...
                </p>
            </div>        
            <div class="col-4 text-center">
                <p style="text-align: justify font-familiy: Delius; font-size: 18px">
                    Instalaciones del Centro de Atención para el<br> 
                    Tratamiento de las Adicciones Guerreros La Paz A.C.
                </p>
            </div>             
        </div>
        
        <div class="row">
            <div class="col-4 text-center">
                <button type="button" class="btn btn-danger btn-lg">
                   <a href="{{ route('tratamiento') }}" style="text-decoration: none; color: white;">Ver Más</a> 
                </button>
            </div>        
            <div class="col-4 text-center">
                <button type="button" class="btn btn-danger btn-lg">
                   <a href="{{ route('intervencion') }}" style="text-decoration: none; color: white;">Ver Más</a> 
                </button>
            </div>            
            <div class="col-4 text-center">
                <button type="button" class="btn btn-danger btn-lg">
                   <a href="{{ route('instalaciones') }}" style="text-decoration: none; color: white;">Ver Más</a> 
                </button>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-4 align-self-start text-center">
                <div class="card text-dark max-heigth: 100%" style="background-color: #C3F9D4;">                            
                    <div class="card-body">                              
                        <p class="card-text" style="font-family: Allura; font-size: 28px;">
                            La recuperación te da la capacidad  de escoger tu propio camino.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4 text-center">
                <img src="{{ asset('images/reinsercion.png') }}" alt="Reinserción" style="width: 286px; height: 205px;">
                <h3 class="text-uppercase" style="font-familiy: Delius;">reinsercion social</h3> 
                <p style="text-align: justify font-familiy: Delius; font-size: 18px">
                    Lectura, juegos interactivos,<br>
                    actividades recreativas y deportivas |<br>
                    INEA (primaria y secundaria | Capacitación para el trabajo
                </p>
            </div>
            <div class="col-4 text-center">
                <img src="{{ asset('images/contacto.png') }}" alt="Contacto" style="width: 286px; height: 205px;">
                <h3 class="text-uppercase" style="font-familiy: Delius;">contacto</h3> 
                <p style="text-align: justify font-familiy: Delius; font-size: 18px">
                    Envianos tus dudas
                </p>   
            </div>                       
        </div>
        
        <div class="row">
            <div class="col-4 text-center">
                
            </div>
            
            <div class="col-4 text-center">
                <button type="button" class="btn btn-danger btn-lg">
                    <a href="href={{ route('intervencion') }}" style="text-decoration: none; color: white;">Ver Más</a> 
                </button>
            </div>
            
            <div class="col-4 text-center">
                <button type="button" class="btn btn-danger btn-lg">
                    <a href="{{ route('contacto') }}" style="text-decoration: none; color: white;">Contactanos</a> 
                </button>
            </div>
        </div>                                
    </div>                
</section>
@endsection
    
    