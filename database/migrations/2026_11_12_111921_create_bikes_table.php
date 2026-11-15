<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Crea la tabla bikes con el catalogo de bicis
    public function up(): void
    {
        Schema::create('bikes', function (Blueprint $table) {
            $table->id();
            $table->string('serial_number', 50)->unique();
            $table->string('model');
            $table->decimal('price_per_hour', 6, 2);
            $table->enum('status', ['available', 'maintenance', 'retired'])->default('available');
            $table->timestamps();
        });
    }

    // Borra la tabla si se hace rollback
    public function down(): void
    {
        Schema::dropIfExists('bikes');
    }
};
