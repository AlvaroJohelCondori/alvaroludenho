<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

    <!-- Styles -->
    <style>
        /*tarjeta 1*/
        .card-header-first {
            margin-top: -40px;
            height: 120px;
            background: linear-gradient(-90deg, #BF019F, #F28A57);
            box-shadow: 1px 5px 15px #a2a2a2;
        }

        /*efecto shadows para todas las tarjetas*/
        .card-section {
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);
        }

        /*Para el efecto sombra al pasar por encima el mouse*/
        .card-section:hover {
            box-shadow: 1px 1px 20px #d2d2d2;
        }

        .hero-section {
            background-image: url('https://images.pexels.com/photos/313032/pexels-photo-313032.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            background-size: cover;
            background-position: center;
            text-align: center;
            padding: 150px 0;
        }
    </style>
    @livewireStyles
</head>

<body>
    <header>
        @livewire('navigation')
    </header>

    <main>
        {{ $slot }}
    </main>
    <footer class="bg-dark py-4">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-4">
                    <img src="https://picsum.photos/200/300" alt="Logo" class="img-fluid mb-4">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper
                        mattis, pulvinar dapibus leo.</p>
                </div>
                <div class="col-md-4">
                    <h5>Enlaces rápidos</h5>
                    <ul class="list-unstyled mb-0">
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Acerca de nosotros</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Redes sociales</h5>
                    <ul class="list-unstyled mb-0">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <p>Copyright &copy; 2023</p>
                </div>
            </div>
        </div>
    </footer>

    @stack('modals')

    @livewireScripts
</body>

</html>
