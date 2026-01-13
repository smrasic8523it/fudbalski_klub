<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KandidatFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'ime_kandidata' => fake()->word(),
            'prezime_kandidata' => fake()->word(),
            'datum_rodjenja' => fake()->date(),
            'email_kandidata' => fake()->word(),
            'adresa' => fake()->word(),
            'telefons' => fake()->word(),
        ];
    }
}
