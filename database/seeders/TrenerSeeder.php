<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Trener;

class TrenerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Dodavanje default Admin korisnika
        Trener::create([
            'ime_trenera' => 'Admin',
            'prezime_trenera' => 'Admin',
            'email_trenera' => 'admin@fudbalski_klub.local',
            'korisnicko_ime' => 'admin',
            'lozinka' => bcrypt('admin'),
            'role' => 'admin',
        ]);
        Trener::create([
            'ime_trenera' => 'Marko',
            'prezime_trenera' => 'Petrović',
            'email_trenera' => 'marko.trener@fudbalski_klub.local',
            'korisnicko_ime' => 'marko_trener',
            'lozinka' => bcrypt('trener123'),
            'role' => 'trener',
        ]);
    }
}
