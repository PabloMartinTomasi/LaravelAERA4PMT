<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>{{ $videojuego['plataforma'] }}</title>
</head>
<body>
    @foreach ($videojuegos as $videojuego)
        <p>ID -> {{$videojuego['id']}}</p>
        <p>Nombre -> {{$videojuego['nombre']}}</p>
        <p>Plataforma -> {{$videojuego['plataforma']}}</p>
        <p>Precio -> {{$videojuego['precio']}}
    @endforeach

    <a href="{{ route('videojuegos.index') }}">
        Volver
    </a>

</body>
</html>
