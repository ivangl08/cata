@extends('layout.plantilla')

@section('titulo', 'Contactanos')

@section('contenido')
<section class="container mt-3">
    <div class="container-fluid">
        <div class="row align-items-center;">
            <div class="col text-center card-header text-uppercase fw-bold" style="background-color: #F0C2BE; font-family: Girassol; font-size: 50px;">                
                ¿tienes dudas?
            </div>
        </div>

        <div class="row justify-content-center mt-5 text-center">
            <div class="col-4">
                <img src="{{ asset('images/mail.png') }}" 
                    alt="Escribenos" 
                    style="width: 70%; height: 70%;"
                    data-bs-toggle="modal" data-bs-target="#modal1">
                <h3 class="fw-bold text-uppercase mt-3" style="font-family: Girassol; font-size: 34px;">envia un mensaje</h3>  
            </div>
            <div class="col-4">
                <img src="{{ asset('images/phone.png') }}" 
                    alt="Llamanos" 
                    style="width: 70%; height: 70%;"
                    data-bs-toggle="modal" data-bs-target="#modal2">
                <h3 class="fw-bold text-uppercase mt-3" style="font-family: girassol; font-size: 34px;">llamanos</h3>   
            </div>
            <div class="col-4">
                <img src="{{ asset('images/location.png') }}" 
                    alt="Visitanos" 
                    style="width: 70%; height: 70%;"
                    data-bs-toggle="modal" data-bs-target="#modal3">
                <h3 class="fw-bold text-uppercase mt-3" style="font-family: girassol; font-size: 34px;">visitanos</h3>   
            </div>
        </div>    

        
    </div>
</section>


<!-- Modal 1 -->
<div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #E1FFDC">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Envianos un correo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('contacto.store') }}" method="POST">

                    @csrf

                    <div class="mb-3">
                      <label for="recipient-name" class="col-form-label">Nombre:</label>
                      <input name="nombre" type="text" class="form-control">

                      @error('nombre')
                        <p><strong>{{$message}}</strong></p>
                      @enderror
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">E-mail:</label>
                        <input name="correo" type="text" class="form-control">
                        @error('correo')
                        <p><strong>{{$message}}</strong></p>
                      @enderror
                      </div>
                      <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Asunto:</label>
                        <input name="asunto" type="text" class="form-control">
                        @error('asunto')
                        <p><strong>{{$message}}</strong></p>
                      @enderror
                      </div>
                    <div class="mb-3">
                      <label for="message-text" class="col-form-label">Mensaje:</label>
                      <textarea name="mensaje" class="form-control"></textarea>
                      @error('mensajemessage')
                      <p><strong>{{$message}}</strong></p>
                    @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success btn-primary">Enviar</button>
                    </div>
                </form>

                @if (session('alerta'))
                    <script>
                        alert("{{session('alerta')}}");
                    </script>                    
                @endif
            </div>
        </div>
    </div>
</div>


<!-- Modal 2 -->
<div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #BABDFF">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Medios de contacto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-3">
                        <img 
                            src="{{ asset('images/phone.png') }}" 
                            alt="Valoracion Medica" style="height: 100px; width: 100px;">
                    </div>
                    <div class="col-sm-6 align-self-center">
                        <p>55 3316 8839</p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-3">
                        <img 
                            src="{{ asset('images/mail.png') }}" 
                            alt="Valoracion Medica" style="height: 100px; width: 100px;">    
                    </div>
                    <div class="col-sm-6 align-self-center">
                        <p>info@guerreroslapaz.org.mx</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal 3 -->
<div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color: #FFE6A5">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuestra ubicación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3765.7858124957106!2d-99.02027618577307!3d19.29167845017223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce032c00d5ba11%3A0x7cdc1f6bba247ce7!2sSan%20Rafael%20Atlixco%2028%2C%20Las%20Puertas%2C%20Tl%C3%A1huac%2C%2013440%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1611716843380!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    <p>Av. San Rafael Atlixco no. 28, Col. Las Puertas,
                        Tláhuac, C.P. 13000, México D.F.
                    </p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection