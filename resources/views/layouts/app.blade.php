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

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

        <link rel="shortcut icon" href="{{asset('img/ico/logo-min.ico')}}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased relative min-h-screen w-full overflow-hidden">
        <x-jet-banner />

        <div class="min-h-screen bg-slate-200 tablet:bg-white">
            
            <div class="sidebar fixed top-0 left-0 h-[calc(100%-(16px*2))] w-80 bg-white py-2 px-3 transition-all duration-150 ease-linear m-4 rounded-md shadow z-50 tablet:hidden">
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
                            <form action="#">
                                <input class="absolute h-full left-0 top-0 rounded-md outline-none border-none bg-slate-100 pl-12 text-lg text-gray-900 w-[calc(100%-6px)]" type="text" id="searchInput" placeholder="Buscar" name="buscarE">
                            </form>
                            <span class="tooltip absolute h-9 w-32 bg-white shadow-md left-32 -top-2/4 -translate-x-2/4 rounded-md leading-9 text-center hover:top-2/4 opacity-0 pointer-events-none transition-all duration-300 delay-75 ease-in hidden text-primary">Buscar</span>
                        </li>
                        <div class="sidebar__items pr-1 h-[calc(100%-150px)] w-full absolute top-16 overflow-y-auto overflow-x-hidden">
                        <li class="relative h-12 w-full my-0 mx-1 leading-10 font-mont font-medium">
                            <a class="text-gray-900 flex items-center transition-all duration-100 ease-linear rounded-md hover:bg-primary hover:text-white" href="{{route('admin.home')}}">
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
                            <a class="text-gray-900 flex items-center transition-all duration-100 ease-linear rounded-md hover:bg-primary hover:text-white" href="{{route('admin.users.index')}}">
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
                            <img class="h-11 w-11 object-cover rounded-md" src="{{ auth()->user()->profile_photo_url }}" alt="">

                            <a href="{{route('profile.show')}}" class="hover:text-primary transition-all duration-150">
                                <div class="name__job ml-3">
                                    <div class="name font-semibold whitespace-nowrap">Antonio Galván</div>
                                    <div class="job text-sm">Administrador</div>
                                </div>
                            </a>
                        </div>

                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            <a href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                
                                <i class="bi bi-box-arrow-right absolute left-[88%] bottom-[12px] -translate-x-2/4 min-w-[50px] leading-10 text-xl rounded-md cursor-pointer text-center hover:text-red-600" id="log_out"></i>
                            </a>
                        </form>
                        
                    </div>
                </div>
            </div>

            <div class="bottomBar hidden fixed bottom-0 left-0 h-16 py-2 px-3 transition-all duration-150 ease-linear shadow z-50 tablet:bg-slate-200 my-2 mx-4 tablet:flex items-end w-full ml-0 mb-0">

                <div class="bottomBar__items flex items-center justify-around w-full phone:gap-16 mini:gap-14 fold:gap-12">
                    <div class="flex w-full justify-center gap-8 phone:gap-2 fold:gap-1">
                        <i class="bi bi-house h-12 text-2xl rounded-2xl leading-10 text-center flex justify-center items-center text-darken hover:bg-darken hover:text-white transition-all duration-150 ease-linear py-2 px-3 cursor-pointer fold:text-xl"></i>
                        <i class="bi bi-laptop h-12 text-2xl rounded-2xl leading-10 text-center flex justify-center items-center text-darken hover:bg-darken hover:text-white transition-all duration-150 ease-linear py-2 px-3 cursor-pointer fold:text-xl"></i>
                    </div>
                    <div class="flex w-full justify-center gap-8 phone:gap-2 fold:gap-1">
                        <i class="bi bi-bag h-12 text-2xl rounded-2xl leading-10 text-center flex justify-center items-center text-darken hover:bg-darken hover:text-white transition-all duration-150 ease-linear py-2 px-3 cursor-pointer fold:text-xl"></i>
                        <i class="bi bi-person h-12 text-2xl rounded-2xl leading-10 text-center flex justify-center items-center text-darken hover:bg-darken hover:text-white transition-all duration-150 ease-linear py-2 px-3 cursor-pointer fold:text-xl"></i>
                    </div>

                    <div class="absolute bottom-8 transition-all duration-150 ease-linear bg-white p-[6px] rounded-full">
                        <i class="bi bi-plus-lg text-2xl leading-10 text-center flex justify-center items-center bg-primary text-white transition-all duration-150 ease-linear p-4 rounded-full cursor-pointer hover:scale-105 phone:p-3 fold:p-2"></i>
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

            <div>
                <div class="logo__content bg-white tablet:bg-white items-center tablet:fixed tablet:top-0 tablet:justify-between tablet:w-full tablet:left-0 tablet:h-16 tablet:px-4 hidden tablet:flex z-50">
                    
                    <img class="h-11 w-11" src="{{asset('img/logo-min.webp')}}" alt="">
                
                    <div class="profile__details opacity-100 tablet:flex transition-all duration-150 ease-linear" id="profileDetails">
                        <img class="h-11 w-11 object-cover rounded-md tablet:rounded-full cursor-pointer block transition-all duration-150" src="{{asset('img/cube.jpg')}}" alt="">
                        <i class="bi bi-x-lg hidden text-2xl items-center justify-center transition-all duration-150 cursor-pointer p-2"></i>
                    </div>
                </div>
    
                <div class="header__menu absolute top-16 bg-white w-full left-0 h-fit flex-col justify-center shadow-md hidden animate-slideoutTop z-40" id="headerMenu">
                    <a href="{{route('profile.show')}}" class="leading-[60px] text-center text-lg border-b-2 border-slate-200 hover:bg-slate-200 transition-all duration-150">Gestionar Perfil</a>
                    <form method="POST" action="{{ route('logout') }}" class="w-full block h-full" x-data>
                        @csrf
                        <a href="{{ route('logout') }}" @click.prevent="$root.submit();" class="leading-[60px] text-center text-lg text-red-500 hover:bg-slate-200 transition-all duration-150 w-full block w-full">Cerrar Sesión</a>
                    </form>
                </div>
            </div>

            <div class="home__content transition-all duration-150 ease-linear absolute h-full w-[calc(100%-320px-(16px*2))] tablet:w-full left-[calc(320px+(16px*2))] p-4 tablet:left-0 pl-0 tablet:p-0 z-0 tablet:top-16 tablet:h-[calc(100%-135px)] tablet:block">
                <!-- Page Content -->
                <main class="main__content bg-white w-full h-full rounded-md shadow py-4 tablet:pt-4 px-4 font-mont overflow-auto tablet:rounded-none tablet:shadow-none">
                    {{ $slot }}
                    
                </main>
            </div>
        </div>

        @stack('modals')

        @livewireScripts

        <script src="{{asset('js/admin/admin-menu.js')}}"></script>
    </body>
</html>
