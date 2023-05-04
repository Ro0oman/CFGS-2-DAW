<!doctype html>
<html>

<head>
    <title>
        @yield('titulo')
    </title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    @include('partials.nav')

    @yield('contenido')
    @include('partials.footer')

</body>
</html>
