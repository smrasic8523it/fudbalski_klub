<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // važno da koristi Authenticatable
use Illuminate\Notifications\Notifiable;

class Trener extends Authenticatable
{
    use Notifiable;

    protected $table = 'treners';

    protected $fillable = [
        'ime_trenera', 'prezime_trenera', 'email_trenera', 'korisnicko_ime', 'lozinka', 'role'
    ];

    // Laravel Auth očekuje 'password', mi koristimo 'lozinka'
    public function getAuthPassword()
    {
        return $this->lozinka;
    }
}
