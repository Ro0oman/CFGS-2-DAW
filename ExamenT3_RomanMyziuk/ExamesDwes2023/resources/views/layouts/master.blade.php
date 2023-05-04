<html>

<head>
    <title>
        @yield('titulo')
    </title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <nav>
        <!-- ... Menú de navegación -->
    </nav>
    @yield('contenido')
</body>

</html>
