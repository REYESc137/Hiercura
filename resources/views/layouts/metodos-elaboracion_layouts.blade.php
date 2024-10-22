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

            <header class="relative" style="background-image: url('{{ asset('assets/img/Metodosdeelaboracion.jpg') }}'); background-size: cover; background-position: center center; background-color: rgba(0, 0, 0, 0.5); background-blend-mode: darken;">
                <div class="flex items-center justify-between h-48 px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <!-- Texto del header -->
                    <h1 class="text-5xl font-bold text-white dark:text-gray-200">
                        {{ __('Métodos de Elaboración') }}
                    </h1>
                    <!-- Input de búsqueda -->
                    <div class="input-group w-50">
                        <input type="search" class="p-3 form-control" placeholder="Buscar receta..." aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="p-3 input-group-text"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="pt-6">
                <div class="container">
                    <div class="row g-4">
                        <!-- Receta 1 -->
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('assets/img/receta1.jpg') }}" class="card-img-top" alt="Receta 1">
                                <div class="card-body">
                                    <h5 class="card-title">Receta de Té de Manzanilla</h5>
                                    <p class="card-text">Una receta simple para preparar un té relajante con propiedades medicinales.</p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#receta1Modal">
                                        Ver detalles
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Receta 2 -->
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('assets/img/receta2.jpg') }}" class="card-img-top" alt="Receta 2">
                                <div class="card-body">
                                    <h5 class="card-title">Tintura de Equinácea</h5>
                                    <p class="card-text">Esta tintura ayuda a fortalecer el sistema inmunológico de manera natural.</p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#receta2Modal">
                                        Ver detalles
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Receta 3 -->
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('assets/img/receta3.jpg') }}" class="card-img-top" alt="Receta 3">
                                <div class="card-body">
                                    <h5 class="card-title">Ungüento de Árnica</h5>
                                    <p class="card-text">Un ungüento que se aplica sobre la piel para aliviar dolores musculares y golpes.</p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#receta3Modal">
                                        Ver detalles
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <!-- Modal Receta 1 -->
        <div class="modal fade" id="receta1Modal" tabindex="-1" aria-labelledby="receta1ModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="receta1ModalLabel">Receta de Té de Manzanilla</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Ingredientes:</strong></p>
                        <ul>
                            <li>1 cucharada de flores secas de manzanilla</li>
                            <li>1 taza de agua caliente</li>
                            <li>Miel al gusto</li>
                        </ul>
                        <p><strong>Instrucciones:</strong></p>
                        <ol>
                            <li>Hervir el agua.</li>
                            <li>Agregar las flores secas de manzanilla al agua caliente.</li>
                            <li>Dejar reposar por 5-10 minutos.</li>
                            <li>Colar y endulzar con miel si se desea.</li>
                            <li>Servir y disfrutar.</li>
                        </ol>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Receta 2 -->
        <div class="modal fade" id="receta2Modal" tabindex="-1" aria-labelledby="receta2ModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="receta2ModalLabel">Tintura de Equinácea</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Ingredientes:</strong></p>
                        <ul>
                            <li>Raíz seca de equinácea</li>
                            <li>Alcohol de 70%</li>
                            <li>Frasco de vidrio con tapa</li>
                        </ul>
                        <p><strong>Instrucciones:</strong></p>
                        <ol>
                            <li>Colocar la raíz seca de equinácea en el frasco de vidrio.</li>
                            <li>Verter el alcohol hasta cubrir completamente la raíz.</li>
                            <li>Cerrar el frasco y dejar macerar durante 4-6 semanas, agitando ocasionalmente.</li>
                            <li>Colar y almacenar en un frasco limpio.</li>
                            <li>Usar de 15 a 30 gotas diluidas en agua cuando sea necesario.</li>
                        </ol>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Receta 3 -->
        <div class="modal fade" id="receta3Modal" tabindex="-1" aria-labelledby="receta3ModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="receta3ModalLabel">Ungüento de Árnica</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Ingredientes:</strong></p>
                        <ul>
                            <li>1 taza de flores secas de árnica</li>
                            <li>1 taza de aceite de oliva</li>
                            <li>Cera de abeja</li>
                        </ul>
                        <p><strong>Instrucciones:</strong></p>
                        <ol>
                            <li>Calentar las flores de árnica en el aceite de oliva a fuego lento durante 2 horas.</li>
                            <li>Colar y agregar cera de abeja para espesar.</li>
                            <li>Verter en un recipiente limpio y dejar enfriar.</li>
                            <li>Aplicar sobre la piel para aliviar dolores musculares.</li>
                        </ol>
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
