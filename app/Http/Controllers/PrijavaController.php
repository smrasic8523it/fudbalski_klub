<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class PrijavaController extends Controller
{
    /**
     * Prikaz forme za login
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Obrada login zahteva
     */
    public function login(Request $request)
    {
        // Validacija unosa
        $credentials = $request->validate([
            'korisnicko_ime' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        // Pokušaj autentifikacije
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

            // Preusmeravanje po roli
            switch ($user->role) {
                case 'admin':
                    return redirect()->route('admin.index');
                case 'trener':
                    return redirect()->route('trener.dashboard');
                case 'kandidat':
                    return redirect()->route('kandidat.profile');
                default:
                    return redirect()->intended('/dashboard');
            }
        }

        // Ako login ne uspe
        return back()->withErrors([
            'korisnicko_ime' => __('Korisničko ime ili lozinka nisu ispravni.'),
        ])->onlyInput('korisnicko_ime');
    }

    /**
     * Logout metoda
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
