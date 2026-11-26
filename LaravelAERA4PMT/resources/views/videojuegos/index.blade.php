<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de videojuegos</title>
</head>
<body>

    <h1>Listado de videojuegos</h1>

    @if (isset($success))
        <p style="color: green;">
            {{ $success }}
        </p>
    @endif

    <hr>

    @foreach ($videojuegos as $videojuego)

        <h2>ID del videojuego {{ $videojuego['id'] }}</h2>

        <p>Nombre: {{ $videojuego['nombre'] }}</p>

        <p>Plataforma: {{ $videojuego['plataforma'] }} minutos</p>

        <p>Precio: {{$videojuego['precio']}} €</p>

        <a href="{{ route('videojuegos.show', $videojuego['id'])}}">
            Ver detalle videojuego
        </a>

        <hr>

    @endforeach

</body>
</html>
