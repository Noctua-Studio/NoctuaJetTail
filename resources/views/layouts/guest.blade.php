<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

        <link rel="shortcut icon" href="{{asset('img/ico/logo-min.ico')}}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-slate-200">
        
    
        {{-- <x-web.menu-center link="http://127.0.0.1:8000/" transparent="false" lang="true" contrast="false">

        </x-web.menu-center> --}}
        

        <x-web.menu-basic>

        </x-web.menu-basic>

        <main >
            {{ $slot }}
            
        </main>

        {{-- <script src="{{asset('js/menu/menu-center.js')}}"></script> --}}
        <script src="{{asset('js/menu/menu-basic.js')}}"></script>
        <script src="{{asset('js/menu/lang-list.js')}}"></script>
    </body>
</html>
