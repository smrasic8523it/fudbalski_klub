<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BrojTelefonaKandidatFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'kandidat_id' => fake()->word(),
            'broj_telefona' => fake()->word(),
        ];
    }
}
