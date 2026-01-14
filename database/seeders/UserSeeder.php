<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Admin
        User::create([
            'name' => 'Admin Admin',
            'korisnicko_ime' => 'admin',
            'email' => 'admin@fudbalski_klub.local',
            'password' => Hash::make('admin'),
            'role' => 'admin',
        ]);

        // Trener
        User::create([
            'name' => 'Trener Trener',
            'korisnicko_ime' => 'trener',
            'email' => 'trener@fudbalski_klub.local',
            'password' => Hash::make('trener'),
            'role' => 'trener',
        ]);

        // Kandidat
        User::create([
            'name' => 'Kandidat Kandidat',
            'korisnicko_ime' => 'kandidat',
            'email' => 'kandidat@fudbalski_klub.local',
            'password' => Hash::make('kandidat'),
            'role' => 'kandidat',
        ]);
    }
}
