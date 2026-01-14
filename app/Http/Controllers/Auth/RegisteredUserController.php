<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Kandidat;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Prikaz forme za registraciju.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Obrada registracije kandidata.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // Validacija inputa
        $request->validate([
            'korisnicko_ime' => ['required', 'string', 'max:50', 'unique:kandidats,korisnicko_ime'],
            'lozinka' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Kreiranje kandidata u bazi
        $kandidat = Kandidat::create([
            'korisnicko_ime' => $request->korisnicko_ime,
            'lozinka' => Hash::make($request->lozinka),
            'role' => 'kandidat', // default role
        ]);

        // Event za registraciju
        event(new Registered($kandidat));

        // Automatski login
        Auth::login($kandidat);

        // Preusmeravanje na profil kandidata
        return redirect()->route('kandidat.profile');
    }
}
