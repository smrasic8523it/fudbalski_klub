<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use Illuminate\Http\Request;

class KandidatController extends Controller
{
    // Prikaz svih kandidata
    public function index()
    {
        $kandidati = Kandidat::all();
        return view('kandidati.index', compact('kandidati'));
    }

    // Prikaz forme za dodavanje kandidata
    public function create()
    {
        return view('kandidati.create');
    }

    // Čuvanje novog kandidata
    public function store(Request $request)
    {
        // Validacija podataka
        $request->validate([
            'ime_kandidata' => 'required|string|max:255',
            'prezime_kandidata' => 'required|string|max:255',
            'datum_rodjenja' => 'required|date',
            'email_kandidata' => 'nullable|email|max:255',
            'adresa' => 'required|string|max:255',
            'telefons' => 'nullable|string|max:50',
            'korisnicko_ime' => 'required|string|max:50|unique:kandidats,korisnicko_ime',
            'lozinka' => 'required|string|min:6',
        ]);

        // Priprema podataka i hashovanje lozinke
        $data = $request->all();
        $data['lozinka'] = bcrypt($data['lozinka']);

        Kandidat::create($data);

        return redirect()->route('kandidati.index')->with('success', 'Kandidat je uspešno dodat!');
    }

    // Prikaz forme za izmenu kandidata
    public function edit(Kandidat $kandidat)
    {
        return view('kandidati.edit', compact('kandidat'));
    }

    // Ažuriranje kandidata
    public function update(Request $request, Kandidat $kandidat)
    {
        $request->validate([
            'ime_kandidata' => 'required|string|max:255',
            'prezime_kandidata' => 'required|string|max:255',
            'datum_rodjenja' => 'required|date',
            'email_kandidata' => 'nullable|email|max:255',
            'adresa' => 'required|string|max:255',
            'telefons' => 'nullable|string|max:50',
            'korisnicko_ime' => 'required|string|max:50|unique:kandidats,korisnicko_ime,' . $kandidat->id,
            'lozinka' => 'nullable|string|min:6',
        ]);

        $data = $request->all();

        if (!empty($data['lozinka'])) {
            $data['lozinka'] = bcrypt($data['lozinka']);
        } else {
            unset($data['lozinka']);
        }

        $kandidat->update($data);

        return redirect()->route('kandidati.index')->with('success', 'Kandidat je uspešno ažuriran!');
    }

    // Brisanje kandidata
    public function destroy(Kandidat $kandidat)
    {
        $kandidat->delete();
        return redirect()->route('kandidati.index')->with('success', 'Kandidat je uspešno obrisan!');
    }
}
