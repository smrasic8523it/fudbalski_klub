<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Kandidat;
use App\Models\Trener;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    // Prikaz forme za login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Obrada login zahteva
    public function login(Request $request)
    {
        // Validacija
        $request->validate([
            'korisnicko_ime' => ['required', 'string'],
            'lozinka' => ['required', 'string'],
        ]);

        $korisnicko_ime = $request->korisnicko_ime;
        $lozinka = $request->lozinka;

        // Probaj pronaći korisnika u Kandidat tabeli
        $user = Kandidat::where('korisnicko_ime', $korisnicko_ime)->first();

        // Ako nije kandidat, probaj Trener tabelu
        if (!$user) {
            $user = Trener::where('korisnicko_ime', $korisnicko_ime)->first();
        }

        // Provera lozinke
        if ($user && Hash::check($lozinka, $user->lozinka)) {
            Auth::login($user); // login korisnika
            $request->session()->regenerate();

            return $this->authenticated($request, $user);
        }

        // Ako ne postoji ili lozinka nije dobra
        throw ValidationException::withMessages([
            'korisnicko_ime' => 'Korisničko ime ili lozinka nisu ispravni.',
        ]);
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    // Preusmeravanje posle logina po roli
    protected function authenticated(Request $request, $user)
    {
        if ($user->role === 'admin') {
            return redirect()->route('admin.index');
        } elseif ($user->role === 'trener') {
            return redirect()->route('trener.dashboard');
        } elseif ($user->role === 'kandidat') {
            return redirect()->route('kandidat.profile');
        }

        // fallback
        return redirect()->intended('/dashboard');
    }
}
