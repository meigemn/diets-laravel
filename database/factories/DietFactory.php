<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Diet>
 */
class DietFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //configuramos la factoria para Diets
            'client_id' => Client::factory(),//asocia cada dieta a un cliente
            'title' => $this->faker->word,
            'description'=> $this->faker->sentence,
            'totalCalories' => $this->faker->numberBetween(100,10000),
            'date' => $this->faker->date,
        ];
    }
}
