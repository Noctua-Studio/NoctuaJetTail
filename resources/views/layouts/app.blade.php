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
    <body class="font-sans antialiased relative min-h-screen w-full overflow-hidden">
        <x-jet-banner />

        <div class="min-h-screen bg-slate-200">
            

            <div class="sidebar fixed top-0 left-0 h-[calc(100%-(16px*2))] w-80 bg-white py-2 px-3 transition-all duration-150 ease-linear m-4 rounded-md shadow z-50">
                <div class="logo__content">
                    <div class="logo text-darken flex gap-2 h-12 w-full items-center opacity-100">
                        <img class="h-11 w-11" src="{{asset('img/logo-min.webp')}}" alt="">
                        <div class="logo__name text-xl text-primary font-semibold whitespace-nowrap">Manager Studio</div>
                    </div>
                    <i class="bi bi-list absolute text-primary left-[90%] top-2 text-3xl h-12 w-12 text-center -translate-x-2/4 flex items-center justify-center cursor-pointer" id="admin-btn"></i>
                </div>

                
                    <ul class="nav__list mt-5 flex flex-col gap-0 relative h-[calc(100%-60px)]">
                        <li class="relative h-12 w-full my-0 mx-1 leading-10 font-mont font-medium mb-3">
                            <i class="bi bi-search h-12 min-w-[48px] rounded-md leading-10 text-center absolute z-40 text-gray-900 flex justify-center items-center cursor-text" id="search-btn"></i>
                            <input class="absolute h-full left-0 top-0 rounded-md outline-none border-none bg-slate-100 pl-12 text-lg text-gray-900 w-[calc(100%-6px)]" type="text" id="searchInput" placeholder="Buscar">
                            <span class="tooltip absolute h-9 w-32 bg-white shadow-md left-32 -top-2/4 -translate-x-2/4 rounded-md leading-9 text-center hover:top-2/4 opacity-0 pointer-events-none transition-all duration-300 delay-75 ease-in hidden text-primary">Buscar</span>
                        </li>
                        <div class="sidebar__items pr-1 h-[calc(100%-150px)] w-full absolute top-16">
                        <li class="relative h-12 w-full my-0 mx-1 leading-10 font-mont font-medium">
                            <a class="text-gray-900 flex items-center transition-all duration-100 ease-linear rounded-md hover:bg-primary hover:text-white" href="#">
                                <i class="bi bi-house-door-fill h-12 min-w-[48px] rounded-md leading-10 text-center flex justify-center items-center"></i>
                                <span class="links__name">Inicio</span>
                            </a>
                            <span class="tooltip absolute h-9 w-32 bg-white shadow-md left-32 -top-2/4 -translate-x-2/4 rounded-md leading-9 text-center hover:top-2/4 opacity-0 pointer-events-none transition-all duration-300 delay-75 ease-in hidden z-50 text-primary">Inicio</span>
                        </li>
    
                        <li class="relative h-12 w-full my-0 mx-1 leading-10 font-mont font-medium">
                            <a class="text-gray-900 flex items-center transition-all duration-100 ease-linear rounded-md hover:bg-primary hover:text-white" href="#">
                                <i class="bi bi-laptop-fill h-12 min-w-[48px] rounded-md leading-10 text-center flex justify-center items-center"></i>
                                <span class="links__name">Sitio</span>
                            </a>
                            <span class="tooltip absolute h-9 w-32 bg-white shadow-md left-32 -top-2/4 -translate-x-2/4 rounded-md leading-9 text-center hover:top-2/4 opacity-0 pointer-events-none transition-all duration-300 delay-75 ease-in hidden text-primary">Sitio</span>
                        </li>
    
                        <li class="relative h-12 w-full my-0 mx-1 leading-10 font-mont font-medium">
                            <a class="text-gray-900 flex items-center transition-all duration-100 ease-linear rounded-md hover:bg-primary hover:text-white" href="#">
                                <i class="bi bi-bag-fill h-12 min-w-[48px] rounded-md leading-10 text-center flex justify-center items-center"></i>
                                <span class="links__name">Productos</span>
                            </a>
                            <span class="tooltip absolute h-9 w-32 bg-white shadow-md left-32 -top-2/4 -translate-x-2/4 rounded-md leading-9 text-center hover:top-2/4 opacity-0 pointer-events-none transition-all duration-300 delay-75 ease-in hidden text-primary">Productos</span>
                        </li>
    
                        <li class="relative h-12 w-full my-0 mx-1 leading-10 font-mont font-medium">
                            <a class="text-gray-900 flex items-center transition-all duration-100 ease-linear rounded-md hover:bg-primary hover:text-white" href="#">
                                <i class="bi bi-gear-fill h-12 min-w-[48px] rounded-md leading-10 text-center flex justify-center items-center"></i>
                                <span class="links__name">Configuración</span>
                            </a>
                            <span class="tooltip absolute h-9 w-32 bg-white shadow-md left-32 -top-2/4 -translate-x-2/4 rounded-md leading-9 text-center hover:top-2/4 opacity-0 pointer-events-none transition-all duration-300 delay-75 ease-in hidden text-primary">Configuración</span>
                        </li>
    
                        <li class="relative h-12 w-full my-0 mx-1 leading-10 font-mont font-medium">
                            <a class="text-gray-900 flex items-center transition-all duration-100 ease-linear rounded-md hover:bg-primary hover:text-white" href="#">
                                <i class="bi bi-person-fill h-12 min-w-[48px] rounded-md leading-10 text-center flex justify-center items-center"></i>
                                <span class="links__name">Usuarios</span>
                            </a>
                            <span class="tooltip absolute h-9 w-32 bg-white shadow-md left-32 -top-2/4 -translate-x-2/4 rounded-md leading-9 text-center hover:top-2/4 opacity-0 pointer-events-none transition-all duration-300 delay-75 ease-in hidden text-primary">Usuarios</span>
                        </li>
                        
                    </div>
                    </ul>
                

                <div class="profile__content absolute text-shadeDark bottom-0    left-0 w-full bg-secondary rounded-b-md">
                    <div class="profile relative py-3 px-3 h-[68px] ">
                        <div class="profile__details opacity-100 flex">
                            <img class="h-11 w-11 object-cover rounded-md" src="{{asset('img/cube.jpg')}}" alt="">

                            <a href="#" class="hover:text-primary transition-all duration-150">
                                <div class="name__job ml-3">
                                    <div class="name font-semibold whitespace-nowrap">Antonio Galván</div>
                                    <div class="job text-sm">Administrador</div>
                                </div>
                            </a>
                        </div>

                        <i class="bi bi-box-arrow-right absolute left-[88%] bottom-[12px] -translate-x-2/4 min-w-[50px] leading-10 text-xl rounded-md cursor-pointer text-center hover:text-red-600" id="log_out"></i>
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

            <div class="home__content transition-all duration-150 ease-linear absolute h-full w-[calc(100%-320px-(16px*2))] left-[calc(320px+(16px*2))] pt-4 pr-4 pb-4 z-0 ">
                <!-- Page Content -->
                <main class="bg-white w-full h-full rounded-md shadow p-4 font-mont overflow-auto">
                    {{ $slot }}
                    
                </main>
            </div>
        </div>

        @stack('modals')

        @livewireScripts

        <script src="{{asset('js/admin/admin-menu.js')}}"></script>
    </body>
</html>
