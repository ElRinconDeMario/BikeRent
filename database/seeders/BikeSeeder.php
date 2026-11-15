<?php

namespace Database\Seeders;

use App\Models\Bike;
use Illuminate\Database\Seeder;

class BikeSeeder extends Seeder
{
    // Mete unas cuantas bicis de prueba en la tabla bikes
    public function run(): void
    {
        $bikes = [
            ['serial_number' => 'URB-001', 'model' => 'Urbana', 'price_per_hour' => 3.50, 'status' => 'available'],
            ['serial_number' => 'URB-002', 'model' => 'Urbana', 'price_per_hour' => 3.50, 'status' => 'available'],
            ['serial_number' => 'MTB-001', 'model' => 'Montaña', 'price_per_hour' => 5.00, 'status' => 'available'],
            ['serial_number' => 'MTB-002', 'model' => 'Montaña', 'price_per_hour' => 5.00, 'status' => 'maintenance'],
            ['serial_number' => 'ELE-001', 'model' => 'Eléctrica', 'price_per_hour' => 8.00, 'status' => 'available'],
            ['serial_number' => 'ELE-002', 'model' => 'Eléctrica', 'price_per_hour' => 8.00, 'status' => 'retired'],
        ];

        foreach ($bikes as $bike) {
            Bike::create($bike);
        }
    }
}
