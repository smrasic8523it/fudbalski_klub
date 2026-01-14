<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KandidatController;
use App\Http\Controllers\TrenerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PrijavaController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

// Početna stranica
Route::get('/', function () {
    return view('welcome');
});

// Dashboard ruta (zahteva autentifikaciju i verifikaciju email-a)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// ------------------------
// LOGIN / LOGOUT
// ------------------------
Route::get('/login', [PrijavaController::class, 'showLoginForm'])->name('login');
Route::post('/login', [PrijavaController::class, 'login']);
Route::post('/logout', [PrijavaController::class, 'logout'])->name('logout');

// ------------------------
// REGISTRACIJA
// ------------------------
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

// ------------------------
// ADMIN panel
// ------------------------
Route::middleware(['auth', 'role:admin'])->group(function() {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::resource('kandidati', KandidatController::class); // admin može sve
    Route::resource('treneri', TrenerController::class);     // admin može sve
});

// ------------------------
// TRENER panel
// ------------------------
Route::middleware(['auth', 'role:trener'])->group(function() {
    Route::get('/trener', [TrenerController::class, 'dashboard'])->name('trener.dashboard');
    Route::post('/prijava/{prijava}/accept', [PrijavaController::class, 'accept'])->name('prijava.accept');
    Route::post('/prijava/{prijava}/reject', [PrijavaController::class, 'reject'])->name('prijava.reject');
});

// ------------------------
// KANDIDAT panel
// ------------------------
Route::middleware(['auth', 'role:kandidat'])->group(function() {
    Route::get('/profil', [KandidatController::class, 'profile'])->name('kandidat.profile');
});

// ------------------------
// SOPSTVENI PROFIL (edit/update/delete)
// ------------------------
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ------------------------
// Laravel Breeze / auth rute (password reset, email verification itd.)
// ------------------------
require __DIR__.'/auth.php';
