<?php

namespace App\Http\Controllers;

use App\Models\Bike;

class BikeController extends Controller
{
    // Catalogo publico con todas las bicis y la lista de tipos para el filtro
    public function index()
    {
        $bikes = Bike::orderBy('model')->get();
        $models = $bikes->pluck('model')->unique()->values();
        return view('bikes.index', compact('bikes', 'models'));
    }

    // Detalle de una bici concreta
    public function show(Bike $bike)
    {
        return view('bikes.show', compact('bike'));
    }
}
