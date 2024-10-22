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

            <header class="relative" style="background-image: url('{{ asset('assets/img/Descubridor.png') }}'); background-size: cover; background-position: center center; background-color: rgba(0, 0, 0, 0.5); background-blend-mode: darken;">
                <div class="flex items-center justify-between h-48 px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <!-- Texto del header -->
                    <h1 class="text-5xl font-bold text-white dark:text-gray-200">
                        {{ __('Descubridores') }}
                    </h1>
                    <!-- Input de búsqueda -->
                    <div class="input-group w-50">
                        <input type="search" class="p-3 form-control" placeholder="Buscar descubridor..." aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="p-3 input-group-text"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="pt-6">
                <div class="container">
                    <div class="row g-4">
                        <!-- Descubridor 1 -->
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('assets/img/descubridor1.jpg') }}" class="card-img-top" alt="Descubridor 1">
                                <div class="card-body">
                                    <h5 class="card-title">Alexander von Humboldt</h5>
                                    <p class="card-text">Famoso explorador y naturalista alemán, quien realizó importantes descubrimientos en América del Sur.</p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#descubridor1Modal">
                                        Ver detalles
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Descubridor 2 -->
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('assets/img/descubridor2.jpg') }}" class="card-img-top" alt="Descubridor 2">
                                <div class="card-body">
                                    <h5 class="card-title">Carl Linnaeus</h5>
                                    <p class="card-text">Botánico sueco conocido como el padre de la taxonomía moderna. Clasificó innumerables plantas medicinales.</p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#descubridor2Modal">
                                        Ver detalles
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Descubridor 3 -->
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('assets/img/descubridor3.jpg') }}" class="card-img-top" alt="Descubridor 3">
                                <div class="card-body">
                                    <h5 class="card-title">Maria Sibylla Merian</h5>
                                    <p class="card-text">Naturalista alemana que documentó diversas plantas y su relación con los insectos en sus expediciones a Surinam.</p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#descubridor3Modal">
                                        Ver detalles
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <!-- Modal Descubridor 1 -->
        <div class="modal fade" id="descubridor1Modal" tabindex="-1" aria-labelledby="descubridor1ModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="descubridor1ModalLabel">Alexander von Humboldt</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Biografía:</strong></p>
                        <p>Alexander von Humboldt (1769-1859) fue un naturalista y explorador alemán. Sus expediciones a América Latina documentaron más de 3,600 especies de plantas.</p>
                        <p><strong>Expediciones:</strong></p>
                        <ul>
                            <li>Viajes a América del Sur entre 1799 y 1804.</li>
                            <li>Exploraciones en el Orinoco y los Andes.</li>
                        </ul>
                        <p><strong>Descubrimientos importantes:</strong></p>
                        <ul>
                            <li>Documentación de la planta Cinchona, utilizada para producir quinina.</li>
                            <li>Descubrimientos sobre la biodiversidad en la región amazónica.</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Descubridor 2 -->
        <div class="modal fade" id="descubridor2Modal" tabindex="-1" aria-labelledby="descubridor2ModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="descubridor2ModalLabel">Carl Linnaeus</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Biografía:</strong></p>
                        <p>Carl Linnaeus (1707-1778), conocido como el padre de la taxonomía moderna, fue un botánico sueco que desarrolló el sistema binomial para clasificar plantas y animales.</p>
                        <p><strong>Expediciones:</strong></p>
                        <ul>
                            <li>Expedición a Laponia en 1732.</li>
                            <li>Exploración de plantas medicinales en Suecia.</li>
                        </ul>
                        <p><strong>Descubrimientos importantes:</strong></p>
                        <ul>
                            <li>Clasificación de miles de plantas, incluidos varios remedios herbales.</li>
                            <li>Desarrollo del sistema de nomenclatura binomial utilizado hasta hoy.</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Descubridor 3 -->
        <div class="modal fade" id="descubridor3Modal" tabindex="-1" aria-labelledby="descubridor3ModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="descubridor3ModalLabel">Maria Sibylla Merian</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Biografía:</strong></p>
                        <p>Maria Sibylla Merian (1647-1717) fue una naturalista y artista alemana que documentó la metamorfosis de los insectos y su relación con las plantas en América del Sur.</p>
                        <p><strong>Expediciones:</strong></p>
                        <ul>
                            <li>Expedición a Surinam en 1699.</li>
                        </ul>
                        <p><strong>Descubrimientos importantes:</strong></p>
                        <ul>
                            <li>Documentación de diversas especies de plantas y su relación con los insectos.</li>
                        </ul>
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
