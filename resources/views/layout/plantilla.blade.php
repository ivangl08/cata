<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>        
</head>
<body class="antialiased">
    @yield('headerInicio')
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #C82216">
        <div class="container-fluid">
            <img src="{{ asset('images/Guerreros de la paz1 RGB.png') }}" alt="Guerreros La Paz A.C." style="width: 68px; height: 71px;">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" style="color: white; font-size: 22px">
                    <li class="nav-item">
                        <a class="nav-link" href={{ route('home') }}>Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ route('nosotros') }}>Quienes somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ route('tratamiento') }}>Tratamiento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ route('intervencion') }}>Intervencion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ route('instalaciones') }}>Instalaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ route('actividades') }}>Actividades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ route('contacto') }}>Contactanos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>          

    <div class="container-fluid">
        @yield('contenido')
    </div>
    
    <footer class="container-fluid mt-3 footer bg-dark" style="bottom: 0px; width: 100%; position: static;">
        <div class="row align-items-start">
            <div class="col">
                <p style="font-familiy: delius; font-size: 20px; color: white;">
                    Centro de Atención para el Tratamiento de las Adicciones Guerreros La Paz A. C. 
                    &copy; 2021, Diseñado por HyperCode
                </p>
            </div>
            <div class="col-2">
                <a href={{ route('privacidad') }} class="navlink" style="text-decoration: none; color: white; font-size: 20px;">Aviso de privacidad</a>
            </div>
        </div>        
    </footer>
    
</body>
</html>