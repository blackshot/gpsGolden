<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- token csrf --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('titulo', 'gpsGolden')</title>
    {{-- fuentes --}}
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    {{-- estilos --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('componentes.navbar')
    @yield('cuerpo') 
    @include('componentes.footer')
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('js')
    @stack('js')
</body>
</html>
