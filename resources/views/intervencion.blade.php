@extends('layout.plantilla')

@section('titulo', 'Intervencion')

@section('contenido')
<section class="container mt-3">
    <div class="container-fluid">
        <div class="row align-items-center;">
            <div class="col text-center card-header text-uppercase fw-bold" style="background-color: #F0C2BE; font-family: Girassol; font-size: 50px;">                
                estrategias de intervención
            </div>
        </div>

        <div class="row justify-content-start mt-2">
            <div class="col align-self-start">
                <h3 style="font-family: Delius; font-size: 34px;" class="fw-bold">
                    ¿Qué es una intervención?
                </h3>
                <p style="font-family: Delius; font-size: 24px; text-align: justify">
                    Una intervención debe ser un proceso respetuoso y compasivo. En una intervención no se trata de culpar,
                    señalando con el dedo al adicto. Una intervención puede ayudar a reactivar la recuperación del adicto y sus
                    seres queridos. El objetivo de una intervención eficaz es llevar a la persona a ponerse de acuerdo consigo
                    mismo para buscar tratamiento profesional que finalmente derive en un programa de rehabilitación.
                </p>
            </div>
        </div>

        <div class="row justify-content-start mt-3">
            <div class="col text-center">
                <img 
                    src="{{ asset('images/valoracion_medica.png') }}" 
                    alt="Valoracion Medica" style="height: 219px; width: 329px;"
                    data-bs-toggle="modal" data-bs-target="#modal1">
                <h3 class="fw-bold" style="font-family: Delius; font-size: 34px;">
                    Valoración Médica 
                </h3> 
            </div>
            <div class="col text-center">
                <img 
                    src="{{ asset('images/terapia_psico.png') }}" 
                    alt="Terapia psicologica" 
                    style="height: 219px; width: 329px;"
                    data-bs-toggle="modal" data-bs-target="#modal2">
                <h3 class="fw-bold" style="font-family: Delius; font-size: 34px;">Terapia psicológica</h3> 
            </div>
            <div class="col text-center">
                <img 
                    src="{{ asset('images/aa.png') }}" 
                    alt="Alcoholicos Anonimos" 
                    style="height: 219px; width: 329px;"
                    data-bs-toggle="modal" data-bs-target="#modal3">
                <h3 class="fw-bold" style="font-family: Delius; font-size: 34px;">12 pasos</h3> 
            </div>
        </div>
        <div class="row justify-content-center mt-2">
            <div class="col text-center">
                <img 
                    src="{{ asset('images/autoanalisis.png') }}" 
                    alt="Auto-analisis" 
                    style="height: 219px; width: 329px;"
                    data-bs-toggle="modal" data-bs-target="#modal4">
                <h3 class="fw-bold" style="font-family: Delius; font-size: 34px;">Auto-analisis de la personalidad</h3> 
            </div>
            <div class="col text-center">
                <img src="{{ asset('images/mas_est.png') }}" 
                    alt="Terapia psicologica" 
                    style="height: 219px; width: 329px;"
                    data-bs-toggle="modal" data-bs-target="#modal5">
                <h3 class="fw-bold" style="font-family: Delius; font-size: 34px;">Más estrategias</h3> 
            </div>
        </div>
    </div>
</section>

<section class="container mt-3">
    <div class="container-fluid">
        <div class="row align-items-center;">
            <div class="col text-center card-header text-uppercase fw-bold" style="background-color: #F0C2BE; font-family: Girassol; font-size: 50px;">                
                reinserción social
            </div>
        </div>

        <div class="row justify-content-start mt-3">
            <div class="col text-center">
                <img src="{{ asset('images/lectura.png') }}" alt="Lectura, juegos, etc." style="height: 219px; width: 329px;">
                <h3 class="fw-bold" style="font-family: Delius; font-size: 34px;">
                    Lectura, juegos interactivos, actividades recreativas
                    y deportivas.
                </h3> 
            </div>
            <div class="col text-center">
                <img src="{{ asset('images/inea.png') }}" alt="INEA" style="height: 219px; width: 329px;">
                <h3 class="fw-bold" style="font-family: Delius; font-size: 34px;">INEA ( Primaria y Secundaria )</h3> 
            </div>
            <div class="col text-center">
                <img src="{{ asset('images/capacitacion_trabajo.png') }}" alt="Capacitacion" style="height: 219px; width: 329px;">
                <h3 class="fw-bold" style="font-family: Delius; font-size: 34px;">Capacitación para el Trabajo</h3> 
            </div>
        </div>
        <div class="row justify-content-start">
            <div class="col text-center">
                <p style="font-family: Delius; font-size: 20px; text-align: justify">
                    Actividades terapéuticas que
                    utilizan herramientas educativas,
                    desarrollando el sistema
                    psicomotriz, la capacidad de
                    mejorar la memoria, el estado de
                    ánimo y la salud mental del usuario
                    en rehabilitación.
                </p> 
            </div>
            <div class="col text-center">
                <p style="font-family: Delius; font-size: 20px; text-align: justify">
                    Los usuarios en rehabilitación
                    cuentan con la oportunidad de
                    terminar sus estudios de primaria y
                    secundaria a traves del INEA.    
                </p>
            </div>
            <div class="col text-center">
                <p style="font-family: Delius; font-size: 20px; text-align: justify">
                    Capacitación para el trabajo a
                    traves de talleres y cursos
                    impartidos por la STPS y CECATI
                </p>    
            </div>
        </div>
    </div>
</section>


<!--MODAL PARA MOSTRAR DIALOGOS-->
<!-- Modal 1 -->
<div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #E1FFDC">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Valoracion Médica</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p style="font-family: Delius; font-size: 18px; text-align: justify">
                    En un término de 48 horas posteriores a su ingreso formal al Centro de Atención para el Tratamiento
                    de las Adicciones Guerreros La Paz A.C. el usuario del servicio será valorado y examinado, así como 
                    medicado por médico general o en su caso un especialista, donde determinara sus enfermedades actuales, 
                    las existencias de malestares o problemas de índole físico, mental o alguna enfermedad contagiosa. 
                    Se le proporcionará en forma rigurosa el tratamiento hasta su total conclusión previa autorización del 
                    médico.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #AAADFF">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Terapia Psicologica</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p style="font-family: Delius; font-size: 18px; text-align: justify">
                    Adquirir una visión integral sobre la conducta del consumo de drogas que ayuden al usuario a mejorar 
                    su salud física y emocional; así como; generar un vínculo con el paciente, a través de un proceso de 
                    conciencia y acompañamiento mediante técnicas psicoterapéuticas como:
                </p>
                <ul>
                    <li>Mejora en la autoestima y auto apoyó del paciente.</li>
                    <li>Conciencia, responsabilidad emotiva y actitudinal.</li>
                    <li>Evidencia y conciencia sobre las repercusiones del consumo de drogas en el área de vida social, de pareja, familiar, 
                            laboral, individual y de salud.
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 3 -->
<div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #FFE6A5">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">12 Pasos</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p style="font-family: Delius; font-size: 18px; text-align: justify">
                En el modelo de tratamiento del Centro de Atención para el Tratamiento de las Adicciones 
                Guerreros La Paz A.C. es fundamental la aplicación de los doce pasos, ya que de una manera general 
                se obtiene el conocimiento de cada uno de ellos, con la finalidad de obtener un cambio de actitud
                y mejoras en el desarrollo conductual del usuario.
            </p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>

<!-- Modal 4 -->
<div class="modal fade" id="modal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #B2FFF1">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Auto-Analisis de la personalidad</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body">
            <p style="font-family: Delius; font-size: 18px; text-align: justify">
                Especificamente trabajamos el cuarto y quinto paso del programa de recuperación de los doce pasos 
                de A.A.; con la finalidad de obtener un análisis de la personalidad y una honesta catarsis mental, 
                obteniendo como resultadp un reajuste sincero a la realidad y con ello detectar las áreas de oportunidad 
                que hay en la formación de la personalidad. Lo que permitirá tomar decisiones concretas de forma 
                analítica y objetiva en su día a día, estableciendo metas de corto, mediano y largo plazo.
            </p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>
        
<!-- Modal 5 -->
<div class="modal fade" id="modal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #FDFFA5">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Más estrategias</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">                
                <ul style="font-family: Delius; font-size: 18px; text-align: justify">
                    <li>Encuentro de la mañana</li>
                    <li>Acondicionamiento Físico, actividades deportivas y recreativas</li>
                    <li>Taller de Lectura</li>
                    <li>Taller de Alimentos</li>
                    <li>Juegos Interactivos</li>
                    <li>Meditación Y Reflexión</li>
                    <li>Cine-Debate</li>
                    <li>Análisis e intervención integral contra el consumo de sustancias psicoactivas</li>
                    <li>Apoyo Terapia Grupal</li>
                </ul>    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>        
@endsection