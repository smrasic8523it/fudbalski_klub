<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TrenerFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'ime_trenera' => fake()->word(),
            'prezime_trenera' => fake()->word(),
            'email_trenera' => fake()->word(),
            'korisnicko_ime' => fake()->word(),
            'lozinka' => fake()->word(),
            'specijalizacije' => fake()->word(),
            'telefons' => fake()->word(),
        ];
    }
}
