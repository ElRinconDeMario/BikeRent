<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    /** @use HasFactory<\Database\Factories\BikeFactory> */
    use HasFactory;

    // Campos que se pueden rellenar con create() o update()
    protected $fillable = ['serial_number', 'model', 'price_per_hour', 'status'];

    // Una bici puede tener muchas reservas
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
