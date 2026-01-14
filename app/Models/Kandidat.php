<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Kandidat extends Authenticatable
{
    use Notifiable;

    protected $table = 'kandidats';

    protected $fillable = [
        'ime_kandidata', 'prezime_kandidata', 'datum_rodjenja', 'email_kandidata',
        'adresa', 'telefons', 'korisnicko_ime', 'lozinka', 'role'
    ];

    public function getAuthPassword()
    {
        return $this->lozinka;
    }
}
