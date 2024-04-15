<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <!-- Navbar -->
        <nav>
            <ul>
                <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Inicio</a></li>
                <li><a href="/photos" class="{{ request()->is('photos') ? 'active' : '' }}">Fotos</a></li>
                <li><a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}">Contacto</a></li>
            </ul>
        </nav>

        <!-- Header Content -->
        <h1>@yield('header_title')</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>Derechos reservados © 2024 Hecho por Samuel Herrera</p>
    </footer>
</body>
</html>