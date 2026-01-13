<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TipTreningaFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'naziv_tipa' => fake()->word(),
            'opis' => fake()->word(),
        ];
    }
}
