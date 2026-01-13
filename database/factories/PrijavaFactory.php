<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PrijavaFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'kandidat_id' => fake()->word(),
            'trener_id' => fake()->word(),
            'datum_prijave' => fake()->date(),
            'motivacija' => fake()->word(),
            'status_id' => fake()->word(),
        ];
    }
}
