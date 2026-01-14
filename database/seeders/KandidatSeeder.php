<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kandidat; // OBAVEZNO da postoji ovaj import
use Illuminate\Support\Facades\Hash;

class KandidatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kandidat::create([
            'ime_kandidata' => 'Jovan',
            'prezime_kandidata' => 'Jović',
            'datum_rodjenja' => '2005-05-20',
            'email_kandidata' => 'jovan.kandidat@fudbalski_klub.local',
            'adresa' => 'Ulica 1, Grad',
            'telefons' => '0601234567',
            'korisnicko_ime' => 'jovan_kandidat',
            'lozinka' => Hash::make('admin'), // lozinka za test
            'role' => 'kandidat',
        ]);
    }
}
