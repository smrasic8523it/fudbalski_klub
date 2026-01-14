<?php

namespace Database\Factories;

use App\Models\Specijalizacija;
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
            'specijalizacija_id' => Specijalizacija::factory(),
            'telefons' => fake()->word(),
        ];
    }
}
