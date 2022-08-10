<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <link rel="shortcut icon" href="{{asset('img/ico/logo-min.ico')}}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-darken">

        <!-- Notas
        - Nombrar al logo "logo-min.webp"
         -->
        
        <x-web.menu>

        </x-web.menu>
        
        <main >
            {{ $slot }}
        </main>

        <script src="{{asset('js/menu.js')}}"></script>
        <script src="{{asset('js/lang.js')}}"></script>
    </body>
</html>
