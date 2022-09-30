<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

        <link rel="shortcut icon" href="{{asset('img/ico/logo-min.ico')}}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <div class="sidebar">
                <div class="logo__content">
                    <div class="logo">
                        <div class="logo__name">Noctua Admin</div>
                    </div>
                    <i class="bi bi-list"></i>
                </div>

                <ul class="nav__list">
                    <li>
                        <a href="#">
                            <i class="bi bi-search"></i>
                            <input type="text" placeholder="Buscar">
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="bi bi-house-door-fill"></i>
                            <span class="links__name">Home</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="bi bi-laptop-fill"></i>
                            <span class="links__name">Sitio</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="bi bi-bag-fill"></i>
                            <span class="links__name">Productos</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="bi bi-gear-fill"></i>
                            <span class="links__name">Configuración</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="bi bi-person-fill"></i>
                            <span class="links__name">Usuarios</span>
                        </a>
                    </li>
                </ul>

                <div class="profile__content">
                    <div class="profile">
                        <div class="profile__details">
                            {{-- <img src="{{asset('img/placeholder.png')}}" alt=""> --}}

                            <div class="name__job">
                                <div class="name">Antonio Galván</div>
                                <div class="job">Administrador</div>
                            </div>
                        </div>

                        <i class="bi bi-box-arrow-right" id="log_out"></i>
                    </div>
                </div>
            </div>


            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
