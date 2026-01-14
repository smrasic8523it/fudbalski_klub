<?php

namespace Database\Factories;

use App\Models\Kandidat;
use App\Models\StatusPrijave;
use App\Models\Trening;
use Illuminate\Database\Eloquent\Factories\Factory;

class PrijavaFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'kandidat_id' => Kandidat::factory(),
            'trening_id' => Trening::factory(),
            'status_prijave_id' => StatusPrijave::factory(),
        ];
    }
}
