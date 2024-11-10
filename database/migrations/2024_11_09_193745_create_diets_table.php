<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('diets', function (Blueprint $table) {
            $table->id(); // Laravel por defecto crea una columna id
            $table->unsignedBigInteger('client_id');
            $table->string('title');
            $table->string('description');
            $table->decimal('totalCalories', 10, 2)->default(0);
            $table->date('date');
            $table->timestamps();

            // Relación de clave foránea
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('diets');
    }
};
