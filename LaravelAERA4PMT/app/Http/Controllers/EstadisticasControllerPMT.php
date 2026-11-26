<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstadisticasControllerPMT extends Controller
{
    public function __invoke(Request $request)
    {
        $videojuegos = [
            [
                'id' => 1,
                'nombre' => 'The Witcher 3: Wild Hunt',
                'plataforma' => 'PC',
                'precio' => 29.99
            ],
            [
                'id' => 2,
                'nombre' => 'God of War Ragnarök',
                'plataforma' => 'PlayStation',
                'precio' => 59.99
            ],
            [
                'id' => 3,
                'nombre' => 'Halo Infinite',
                'plataforma' => 'Xbox',
                'precio' => 39.99
            ],
            [
                'id' => 4,
                'nombre' => 'The Legend of Zelda: Tears of the Kingdom',
                'plataforma' => 'Nintendo Switch',
                'precio' => 59.99
            ],
            [
                'id' => 5,
                'nombre' => 'Cyberpunk 2077',
                'plataforma' => 'PC',
                'precio' => 34.99
            ],
            [
                'id' => 6,
                'nombre' => 'Spider-Man 2',
                'plataforma' => 'PlayStation',
                'precio' => 69.99
            ],
            [
                'id' => 7,
                'nombre' => 'Forza Horizon 5',
                'plataforma' => 'Xbox',
                'precio' => 49.99
            ],
            [
                'id' => 8,
                'nombre' => 'Mario Kart 8 Deluxe',
                'plataforma' => 'Nintendo Switch',
                'precio' => 44.99
            ],
            [
                'id' => 9,
                'nombre' => 'Minecraft',
                'plataforma' => 'PC',
                'precio' => 19.99
            ],
            [
                'id' => 10,
                'nombre' => 'The Last of Us Part II',
                'plataforma' => 'PlayStation',
                'precio' => 39.99
            ],
            [
                'id' => 11,
                'nombre' => 'Resident Evil 4',
                'plataforma' => 'PC',
                'precio' => 19.99
            ]
        ];

        //Número total de videojuegos
        $totalVideojuegos = count ($videojuegos);//resultado 11

        //Número de plataformas diferentes
        $todasLasPlataformas = array_column($videojuegos, 'plataforma');//se veran todas las plataformas, donde nos servira para saber cuantas plataformas hay
        $plataformasUnicas = array_unique($todasLasPlataformas);//nos servira para no tener duplicados en las , en este caso seran -> PC, PlayStation, Nintendo Switch y Xbox
        $totalPlataformasUnicas = count($plataformasUnicas);

        //Precio medio de los videojuegos
        $totalPrecio = array_column($videojuegos, 'precio');//aqui tenremos un array con todos los precios
        $ingreso = array_sum($totalPrecio);
        $precioMedio = $ingreso / $totalVideojuegos;//con esto se obtiene la media de precio de los videojuegos

        return response()->json([
            'total_videojuegos' => $totalVideojuegos,
            'total_plataformas_unicas' => $totalPlataformasUnicas,
            'precio_medio' => $precioMedio,
        ]);
    }
}
