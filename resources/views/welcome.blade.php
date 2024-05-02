<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Viajes Increíbles</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>
<body>
    <div class="header">
        <h1>Viajes Increíbles</h1>
    </div>

    <div class="content">
        <h2>Paquetes de Viaje</h2>

        <div class="package">
            <img src="https://via.placeholder.com/500x300" alt="Paquete de Viaje 1">
            <h3>Paquete de Viaje 1</h3>
            <p>Descripción del paquete de viaje 1...</p>
        </div>

        <div class="package">
            <img src="https://via.placeholder.com/500x300" alt="Paquete de Viaje 2">
            <h3>Paquete de Viaje 2</h3>
            <p>Descripción del paquete de viaje 2...</p>
        </div>

        <!-- Agrega más paquetes de viaje aquí -->
    </div>

    <div class="footer">
        <p>&copy; 2023 Viajes Increíbles. Todos los derechos reservados.</p>
    </div>
</body>
</html>