<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kandidats', function (Blueprint $table) {
            $table->id();
            $table->string('ime_kandidata');
            $table->string('prezime_kandidata');
            $table->date('datum_rodjenja');
            $table->string('korisnicko_ime')->unique();
            $table->string('lozinka');
            $table->string('role')->default('kandidat'); // nova kolona role
            $table->string('email_kandidata')->nullable();
            $table->string('adresa');
            $table->string('telefons')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kandidats');
    }
};
