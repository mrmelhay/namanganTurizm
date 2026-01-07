<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->json('description');
            $table->string('price'); // Changed to string to support "From $100" or similar, or keep int if strictly number. User said "Tur paket". Let's use string for flexibility or create currency column. Simple is string or decimal. Let's use string to allow text. 
            // Wait, usually price is formatted. Let's use string.
            // Requirement said "2 kun 1 kecha" (duration), "Mikroavtobus" (transport).
            $table->string('duration');
            $table->string('transport_type');
            $table->json('route_list')->nullable(); // "Namangan - Toshkent - Namangan"
            $table->json('images')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
