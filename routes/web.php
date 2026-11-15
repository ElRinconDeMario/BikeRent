<?php

use App\Http\Controllers\BikeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|---------------------------------------------------------------------
| Rutas Públicas (Sin Autenticación)
|---------------------------------------------------------------------
*/

// Página principal o catálogo público de bicicletas
Route::get('/', [BikeController::class, 'index'])->name('bikes.index');

// Ver los detalles de una bicicleta específica
Route::get('/bikes/{bike}', [BikeController::class, 'show'])->name('bikes.show');

// Rutas que trae Breeze (dashboard y perfil)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rutas de autenticación por defecto (Laravel Breeze / Jetstream / Fortify)
require __DIR__.'/auth.php';
