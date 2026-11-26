<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideojuegosModelPMT
{
    private static array $videojuegos = [
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

    public static function all(){
        return self::$videojuegos;
    }

    public static function find($id){
        foreach (self::$videojuegos as $videojuego){
            if($videojuego['id'] == $id){
                return $videojuego;
            }
        }

        return null;
    }
}
