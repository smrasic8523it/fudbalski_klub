<?php

namespace Database\Factories;

use App\Models\TipTreninga;
use Illuminate\Database\Eloquent\Factories\Factory;

class TreningFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'tip_treninga_id' => TipTreninga::factory(),
            'datum' => fake()->date(),
            'vreme' => fake()->time(),
            'opis' => fake()->word(),
        ];
    }
}
