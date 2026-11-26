
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideojuegoControllerPMT;
use App\Http\Controllers\EstadisticasControllerPMT;

Route::prefix('videojuegos')->name('videojuegos.')->group(function () {
    Route::get('/', [VideojuegoControllerPMT::class, 'index'])->name('index');

    Route::get('/{id}', [VideojuegoControllerPMT::class, 'show'])->name('show');

    Route::get('/plataformas', [VideojuegoControllerPMT::class, 'plataformas'])->name('plataforma');

     Route::get('/estadisticas', EstadisticasControllerPMT::class)->name('estadisticas');

    
});

/* Route::get('/estadisticas', EstadisticasControllerPMT::class)->middleware('auth');

Route::get('/login', function(){
    return "Pagina para el login";
})->name('login'); */

