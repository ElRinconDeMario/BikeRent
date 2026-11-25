<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Crea la tabla bookings, que une usuarios y bicis
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            // Si se borra el usuario o la bici, se borran sus reservas
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('bike_id')->constrained()->onDelete('cascade');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->enum('status', ['pending', 'active', 'completed', 'cancelled'])->default('pending');
            $table->decimal('total_cost', 8, 2)->default(0.00);
            $table->timestamps();
        });
    }

    // Borra la tabla si se hace rollback
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
