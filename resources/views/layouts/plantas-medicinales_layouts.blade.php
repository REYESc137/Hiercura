<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Hiercura') }}</title>
        <link rel="icon" href="{{ asset('assets/img/Hiercura_logo.png') }}" type="image/png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-100">
        <div class="min-h-screen bg-gray-100">
            <!-- Aquí va la navegación -->
            @if (Auth::check())
                @include('layouts.navigation') <!-- Menú para usuarios autenticados -->
            @else
                @include('layouts.navigation2') <!-- Menú para usuarios no autenticados -->
            @endif

            <!-- Page Heading -->
            <header class="relative" style="background-image: url('{{ asset('assets/img/Plantasmedicinales.jpg') }}'); background-size: cover; background-position: center center; background-color: rgba(0, 0, 0, 0.5); background-blend-mode: darken;">
                <div class="flex items-center justify-between h-48 px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <!-- Texto del header -->
                    <h1 class="text-5xl font-bold text-white dark:text-gray-200">
                        {{ __('Plantas Medicinales') }}
                    </h1>
                    <!-- Input de búsqueda -->
                    <div class="input-group w-50">
                        <input type="search" class="p-3 form-control" placeholder="Buscar planta medicinal..." aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="p-3 input-group-text"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </header>


            <!-- Page Content -->
            <main class="pt-0 mt-0">
                <div class="container py-5">
                    <div class="row g-4">
                        <!-- Ejemplo de una card para una planta medicinal -->
                        <div class="col-md-6 col-lg-4">
                            <div class="rounded position-relative">
                                <div class="fruite-img">
                                    <img src="{{ asset('assets/img/best-product-1.jpg') }}" class="img-fluid w-100 rounded-top" alt="Planta Medicinal">
                                </div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Nombre común de la planta</h4>
                                    <p><strong>Nombre científico:</strong> <i>Nombre Científico de la Planta</i></p>
                                    <p><strong>Familia:</strong> Familia de la Planta</p>
                                    <!-- Botón de ver detalles -->
                                    <button type="button" class="mt-3 btn btn-primary" data-bs-toggle="modal" data-bs-target="#plantDetailsModal">
                                        Ver Detalles
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Fin de la card de ejemplo -->
                    </div>
                </div>
            </main>
        </div>

        <!-- Modal para ver detalles -->
        <div class="modal fade" id="plantDetailsModal" tabindex="-1" aria-labelledby="plantDetailsModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="plantDetailsModalLabel">Detalles de la Planta Medicinal</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Contenido vacío, puedes agregar detalles más adelante -->
                        Aquí van los detalles de la planta medicinal.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scripts para Bootstrap y otros plugins -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>
