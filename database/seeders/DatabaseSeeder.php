<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            TipTreningaSeeder::class,
            StatusPrijaveSeeder::class,
            SpecijalizacijaSeeder::class,
            KandidatSeeder::class,
            TrenerSeeder::class,
            TreningSeeder::class,
            PrijavaSeeder::class,
        ]);
    }
}
