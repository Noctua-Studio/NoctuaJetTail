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

        <x-admin.appContainer>
            <x-slot name="title">
                <x-admin.appTitle>Manager Studio</x-admin.appTitle>
            </x-slot>

            <x-slot name="desktop">
                <x-admin.appNav>
                    <x-admin.appNavItem route="{{route('admin.home')}}" icon="bi-house-door-fill">Inicio</x-admin.appNavItem>

                    <x-admin.appNavItem route="#" icon="bi-laptop-fill">Sitio</x-admin.appNavItem>

                    <x-admin.appNavItem route="#" icon="bi-bag-fill">Productos</x-admin.appNavItem>

                    <x-admin.appNavItem route="#" icon="bi-gear-fill">Configuración</x-admin.appNavItem>

                    <x-admin.appNavItem route="{{route('admin.users.index')}}" icon="bi-person-fill">Usuarios</x-admin.appNavItem>
                </x-admin.appNav>

                <x-admin.appProfile></x-admin.appProfile>
            </x-slot>

            <x-slot name="mobile">
                <x-admin.appNavMobile>
                    <x-admin.appNavMobileItem route="{{route( 'admin.home' )}}" icon="bi-house"></x-admin.appNavMobileItem>
                    <x-admin.appNavMobileItem route="#" icon="bi-laptop"></x-admin.appNavMobileItem>
                    <x-admin.appNavMobileItem route="#" icon="bi-bag"></x-admin.appNavMobileItem>
                    <x-admin.appNavMobileItem route="#" icon="bi-gear"></x-admin.appNavMobileItem>
                    <x-admin.appNavMobileItem route="{{route( 'admin.users.index' )}}" icon="bi-person"></x-admin.appNavMobileItem>
                </x-admin.appNavMobile>
                
                <x-admin.appHeaderMobile></x-admin.appHeaderMobile>
            </x-slot>

            <x-slot name="app">
                {{$slot}}
            </x-slot>
        </x-admin.appContainer>
        

        @stack('modals')

        @livewireScripts

        <script src="{{asset('js/admin/admin-menu.js')}}"></script>
    </body>
</html>
