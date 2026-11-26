<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VideojuegosModelPMT;

class VideojuegoControllerPMT extends Controller
{
    public function index(){
        $videojuegos = VideojuegosModelPMT::all();

        return view('videojuegos.index', compact('videojuegos'));
    }

    public function show($id){
        $videojuego = VideojuegosModelPMT::find($id);

        if(!$videojuego){
            return response('El videojuego no existe', 404);
        }

        return view('videojuegos.show', compact('videojuego'));
    }

    public function plataformas(Request $request){
        $plataforma = $request->input('plataforma');

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

        $resultado = [];

        foreach ($videojuegos as $videojuego){
            if(strtolower($videojuego['plataforma']) == strtolower($plataforma)){
                $resultado[] = $videojuego;
            }
        }

        return response()->json($resultado);
    }
}
