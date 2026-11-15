<?php

namespace App\Http\Controllers;

use App\Models\Bike;

class BikeController extends Controller
{
    // Catalogo publico con todas las bicis
    public function index()
    {
        $bikes = Bike::orderBy('model')->get();
        return view('bikes.index', compact('bikes'));
    }

    // Detalle de una bici concreta
    public function show(Bike $bike)
    {
        return view('bikes.show', compact('bike'));
    }
}
