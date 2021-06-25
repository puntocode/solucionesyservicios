<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <!-- Scripts -->
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icomoon/style.css') }}" rel="stylesheet">
</head>
<body data-spy="scroll" data-target="#main-navbar" data-offset="400">
    <x-header></x-header>
    @yield('section')

    <script src="{{ asset('js/app.js') }}"></script>
    @if(Session::has('mail'))
        <script>
            Swal.fire({
                title: 'Consulta Envíada!',
                html: 'Muchas gracias.<br>Te responderemos en la brevedad posible!',
                icon: 'success',
                confirmButtonColor: "#1265AB",
            })
        </script>
    @endif
    @yield('script')
</body>
</html>
