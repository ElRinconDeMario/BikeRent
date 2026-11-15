<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    // Campos que se pueden rellenar con create() o update()
    protected $fillable = ['user_id', 'bike_id', 'start_time', 'end_time', 'status', 'total_cost'];

    // Convierte las fechas a Carbon y el user_id a entero
    protected $casts = [
        'user_id' => 'integer',
        'start_time' => 'datetime',
        'end_time' => 'datetime',
    ];

    // La reserva pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // La reserva pertenece a una bici
    public function bike()
    {
        return $this->belongsTo(Bike::class);
    }
}
