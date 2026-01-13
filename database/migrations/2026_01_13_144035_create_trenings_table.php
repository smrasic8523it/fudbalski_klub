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
        Schema::create('trenings', function (Blueprint $table) {
            $table->id();
            $table->date('datum_treninga');
            $table->time('vreme');
            $table->string('lokacija');
            $table->string('trener_id');
            $table->string('tip_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trenings');
    }
};
