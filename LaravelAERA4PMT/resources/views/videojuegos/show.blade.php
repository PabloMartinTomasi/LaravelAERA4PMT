<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>{{ $videojuego['nombre'] }}</title>
</head>
<body>

    <h1>{{ $videojuego['nombre'] }}</h1>

    <p>
        <strong>ID:</strong>
        {{ $videojuego['id'] }}
    </p>

    <p>
        <strong>Nombre:</strong>
        {{ $videojuego['nombre'] }}
    </p>

    <p>
        <strong>Plataforma:</strong>
        {{ $videojuego['plataforma'] }}
    </p>

    <p>
        <strong>Precio:</strong>
        {{ $videojuego['precio'] }}
    </p>


    <a href="{{ route('videojuegos.index') }}">
        Volver a la cartelera
    </a>

</body>
</html>
