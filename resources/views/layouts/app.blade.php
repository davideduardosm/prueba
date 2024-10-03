<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>
    <!-- Agregar aquí tus hojas de estilo, como Bootstrap o CSS personalizados -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <header>
        <!-- Aquí va el contenido del encabezado de tu aplicación -->
        <nav>
            <!-- Barra de navegación, links, etc. -->
        </nav>
    </header>

    <main>
        @yield('content') <!-- Aquí se insertará el contenido de cada vista -->
    </main>

    <footer>
        <!-- Aquí va el contenido del pie de página -->
        <p>&copy; {{ date('Y') }} Mi Aplicación</p>
    </footer>

    <!-- Agregar aquí tus scripts, como jQuery o JavaScript personalizados -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
