@extends('layout.plantilla')

@section('titulo', 'Tratamiento')

@section('contenido')
<section class="container">
    <div class="container-fluid">
        <h2 class="text-uppercase fw-bold" style="font-family: Girassol; font-size: 60px; text-align: center">tratamiento de adicciones</h2>

        <div class="row mt-3">
            <div class="col-6">
                <p style="text-align: justify; font-family: Delius; font-size: 18px;">
                    El Centro de Atención para el Tratamiento de las Adicciones Guerreros
                    La Paz A.C., ofrece un modelo del tratamiento en residencia, el cual tiene
                    por objeto conseguir la abstinencia total. El tratamiento proporcionado
                    enfatiza la parte de la psiquis humana proporcionada
                    por el programa de recuperación de A.A., ya que es de suma importancia para aquel que
                    tiene la adicción o el alcoholismo. <br>
                    Se proporcionan herramientas para que el usuario realice un auto
                    análisis de su personalidad.                                        
                </p>
                <p style="text-align: justify; font-family: Delius; font-size: 18px;">
                    Buscamos que el usuario pueda integrarse en un ámbito laboral, o bien;
                    iniciar su propio negocio. <br> 
                    Contamos con apoyo psicológico en el cual el usuario tendrá un proceso
                    de conciencia y acompañamiento, mediante técnicas psicoterapéuticas
                    las cuales ayudaran a tener conciencia sobre las repercusiones del
                    consumo de drogas en el área de la vida social, de pareja, familiar,
                    laboral, individual y de salud; actividades deportivas, recreativas y juegos
                    interactivos en las cuales el usuario obtenga una mejor convivencia.
                </p>
            </div>
            <div class="col-6">
                <img src="{{ asset('images/trat-adicciones.png') }}" alt="Tratamiendo de adicciones" style="width: 100%; height: 95%;">
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <h2 class="text-uppercase fw-bold" style="font-family: Girassol; font-size: 52px; text-align: left">costo del tratamiento</h2>
                <p style="font-family: Delius; font-size: 30px; text-align: center">
                    $13,500 (trece mil quinientos pesos 00/M.N.) 
                    por tres meses.
                </p>
            </div>
            <div class="col-6 align-self-center">
                <div class="card-body align-self-center" style="background-color: #E1FFDC; max-width: 100%; height: 100%;">
                    <p class="card-text" style="text-align: justify; font-family: Delius; font-size: 20px">
                        Ofrecemos en todo el desarrollo de nuestro
                        programa un trato digno y de respeto con calidad
                        humana que le permitirá al usuario incorporar a su
                        vida valores, mejorar su autoestima y lograr la
                        dignificación como ser humano coligado a los
                        derechos humanos y a las garantías individuales
                        que otorga la Norma Oficial Mexicana
                        NOM-028-SSA2-2009.
                    </p>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col text-center">
                <button type="button" class="text-uppercase btn-secondary btn btn-lg mt-4" style="background-color: #D03F3C; font-family: Girassol; font-size: 30px; width: 60%; height: 100%;">
                    <a href="{{ route('intervencion') }}" style="text-decoration: none; color: white;">estrategias de intervención</a> 
                </button>            
            </div>
        </div>
    </div>
</section>
@endsection