<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DevStagram - @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @yield('css')

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

    </head>
    <body>
        @include('layouts.navigation')

        <main class="container mx-auto mt-10">
        @yield('content')
        </main>

        <footer class="text-center p-5 text-gray-500 uppercase">
            DevStagram - Todos los derechos reservados {{ now()->year }}
        </footer>


        <!-- Scripts -->
        @yield('scripts')
    </body>
</html>
