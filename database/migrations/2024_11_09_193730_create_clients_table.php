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
        Schema::create('clients', function (Blueprint $table) {
            $table->integer('idClient')->autoIncrement();
            $table->string('name');
            $table->string('surname');
            $table->char('phone',11);//limita en 11 los numeros en el telofono (contando por ej: +34)
            $table->string('email')->unique();//garantizamos que solo sea uno
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
