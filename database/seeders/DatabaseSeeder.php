<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\Client::factory(3) // Crea 3 clientes
            ->has(\App\Models\Diet::factory(4), 'diets') // Crea 4 dietas para cada cliente
            ->create(); // Guarda los datos en la base de datos
    }
}
