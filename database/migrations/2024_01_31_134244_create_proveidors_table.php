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
        Schema::create('proveïdors', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('cif');
            $table->string('numero');
            $table->string('email');
            $table->string('tipus_incidencia');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveidors');
    }
};
