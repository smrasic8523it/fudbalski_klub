<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('treners', function (Blueprint $table) {
            $table->string('role')->default('trener'); // dodaj role
        });

        Schema::table('kandidats', function (Blueprint $table) {
           
        });
    }

    public function down(): void
    {
        Schema::table('treners', function (Blueprint $table) {
            $table->dropColumn('role');
        });

        Schema::table('kandidats', function (Blueprint $table) {
            $table->dropColumn('role');
        });
    }
};
