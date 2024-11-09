<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('diets', function (Blueprint $table) {
            $table->integer('idDiet')->autoIncrement;
            $table->string('title');
            $table->string('description');
            $table->decimal('totalCalories',10,2)->default(0);//nombre,numTotal,decRedondeados
            $table->date('date');
            $table->timestamps();//laravel crea dos columnas "created_at" y "updated_at"
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diets');
    }
};
