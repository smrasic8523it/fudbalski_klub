<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrenerController extends Controller
{
    public function dashboard()
    {
        return view('trener.dashboard'); // napravi view kasnije
    }
}
