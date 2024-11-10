<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Diet;
use Illuminate\Database\Eloquent\Factories\Factory;

class DietFactory extends Factory
{
    protected $model = Diet::class;

    public function definition()
    {
        return [
            'client_id' => Client::factory(), // Relacionamos cada dieta con un cliente creado
            'title' => $this->faker->word,
            'description' => $this->faker->sentence,
            'totalCalories' => $this->faker->numberBetween(100, 10000),
            'date' => $this->faker->date(),
        ];
    }
}
