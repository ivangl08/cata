@extends('layout.plantilla')

@section('titulo', 'Nosotros')

@section('contenido')
<section class="container">
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-8 align-self-start">
                <h2 class="text-uppercase fw-bold" style="font-family: Girassol; font-size: 60px; text-align: center">nuestra historia</h2>
            </div>

            <div class="col-4 align-self-center">
                <button type="button" class="text-uppercase btn-secondary btn btn-lg" style="background-color: #66DC52; font-family: Delius; font-size: 20px; width: 100%; height: 300%;">
                    <a href="#valores" style="text-decoration: none; color: white;">Objetivo | Misión | Visión | Valores</a>                     
                </button>  
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-8">
                <img src="{{ asset('images/historia.png') }}" alt="Nuestra Historia" style="width: 100%; height: 95%;">
            </div>
            <div class="col-4 align-self-end">
                <p style="text-align: justify; font-family: Delius; font-size: 18px;">
                    Se crea el “Centro de Atención para el<br>
                    Tratamiento de las Adicciones Guerreros La Paz
                    A.C.” con la finalidad de transmitir un mensaje
                    de vida y prevención; ofreciendo tratamiento
                    terapéutico basado en la recuperación de AA. <br>
                    Esto ante la alarmante problématica que existe
                    respecto al consumo de sustancias
                    psicoactivas; dando como resultado
                    desintegración familiar, social y creando
                    conductas Jurídicas perjudiciales.
                </p>
                <p style="text-align: justify; font-family: Delius; font-size: 18px;">
                    El 16 de Diciembre de 2011, en la Cd. de 
                    Amecameca, Edo. Méx., se constituye como
                    “Asociación Civil”, ante la fé del Notario Público
                    115 Lic. Jesús Córdova Gálvez en el Edo. Méx.
                    del patrimonio inmobiliario federal.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container">
    <div class="container-fluid">
        <a name="valores"></a>
        <div class="row justify-content-start mt-3">
            <div class="col-3">
              <h2 class="text-uppercase fw-bold" style="font-family: Girassol; font-size: 52px; text-align: center">objetivo</h2>
            </div>
            <div class="col-7">
              <p style="text-align: justify; font-family: Delius; font-size: 20px">
                El objetivo del tratamiento es que los usuarios con dependencia al alcohol u otras
                sustancias adictivas logren la abstinencia, al desarrollar habilidades que faciliten
                su participación en actividades cotidianas satisfactorias,libres de drogas; así
                mismo otorgar las herramientas para enfrentar las dificultades emocionales,
                ayudar a reconocer entornos propicios a una recaída, para así poder prevenirla y
                por último brindando sesiones de seguimiento para mantener metas y promover a
                cambios positivos en el usuario.
              </p>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-4">
                <h2 class="text-uppercase fw-bold text-end" style="font-family: Girassol; font-size: 52px; text-align: center">misión</h2>
            </div>
            <div class="col-8">
                <p style="text-align: justify; font-family: Delius; font-size: 20px">
                    Brindar un servicio integral, tanto en la modalidad residencial como
                    ambulatoria, siendo éste de calidad y seguridad para nuestros
                    usuarios. 
                </p>
            </div>
        </div>
        <div class="row justify-content-end mt-3">
            <div class="col-3">
                <h2 class="text-uppercase fw-bold text-end" style="font-family: Girassol; font-size: 52px; text-align: center">visión</h2>
            </div>
            <div class="col-6">
                <p style="text-align: justify; font-family: Delius; font-size: 20px">
                    Ser un centro de atención con calidad y calidez humana en el
                    tratamiento de las adicciones, proporcionando herramientas a los
                    usuarios con el fin de que se reintegren a su entorno familiar y social,
                    contribuyendo a la cinstrucción de una comunidad sana, armónica
                    y productiva.
                </p>
            </div>
        </div>

        <div class="row justify-content-start">
            <div class="col-3">
                <h2 class="text-uppercase fw-bold" style="font-family: Girassol; font-size: 52px; text-align: center">valores</h2>
            </div>
            <div class="col-3">
                <div class="card text-dark mt-2">
                    <div class="card-header" style="background-color: #F9E79F; font-family: Delius; font-size: 20px; text-align: center">Espiritu de Servicio</div>
                </div>
            </div>
            <div class="col-3">
                <div class="card text-dark mt-2">
                    <div class="card-header" style="background-color: #EDBB99; font-family: Delius; font-size: 20px; text-align: center">Honradez</div>
                </div> 
            </div>
            <div class="col-3">
                <div class="card text-dark mt-2">
                    <div class="card-header" style="background-color: #B1FFA5; font-family: Delius; font-size: 20px; text-align: center">Respeto</div>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-3">
                <div class="card-header" style="background-color: #7CF1F3; font-family: Delius; font-size: 20px; text-align: center">Igualdad</div> 
            </div>
            <div class="col-3">
                <div class="card-header" style="background-color: #C39BD3; font-family: Delius; font-size: 20px; text-align: center">Solidaridad</div>
            </div>
        </div>
    </div>
</section>

<section class="container mt-3">
    <div class="container-fluid">                       
        <div class="card-body align-self-center" style="background-color: #E1FFDC; max-width: 100%;">
            <ul class="card-text">
                <li>
                    Ley General de Salud
                </li>
                <li>
                    Norma Oficial Mexicana NOM-028-SSA2-2009 para la Prevención, Tratamiento y Control de las Adicciones
                </li>
                <li>
                    Norma Oficial Mexicana NOM-004-SSA3-2012 del Expediente Clinico
                </li>
                <li>
                    CENCLIN/2011/007
                </li>
                <li>
                    Estandar Mexicano de Competencias de la Consejería en Adicciones
                </li>
            </ul>                    
        </div>
    </div>
</section>
@endsection
