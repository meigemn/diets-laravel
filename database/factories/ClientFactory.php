<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //configuramos la factoria para Client
            
            'name' => $this->faker-> firstName,
            'surname'=> $this->faker->lastName(['','']),
            'phone'=> $this ->faker->unique()->numerify('##-###-###-###'),
            'mail'=> $this ->faker->unique()->safeEmail,
        ];
    }
}
