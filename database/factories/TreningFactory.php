<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TreningFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'datum_treninga' => fake()->date(),
            'vreme' => fake()->time(),
            'lokacija' => fake()->word(),
            'trener_id' => fake()->word(),
            'tip_id' => fake()->word(),
        ];
    }
}
