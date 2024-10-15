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
        Schema::create('autres_composantes_cout_embauches', function (Blueprint $table) {
            $table->id();
            $table->string('composanteun');
            $table->string('composantedeux');
            $table->string('composantetrois');
            $table->string('composantequatre');
            $table->string('composantecinq');
            $table->string('composantesix');
            $table->string('composantesept');
            $table->string('composantehuit');
            $table->string('composanteneuf');
            $table->string('composantedix');
            $table->integer('valeurun');
            $table->integer('valeurdeux');
            $table->integer('valeurtrois');
            $table->integer('valeurquatre');
            $table->integer('valeurcinq');
            $table->integer('valeursix');
            $table->integer('valeursept');
            $table->integer('valeurhuit');
            $table->integer('valeurneuf');
            $table->integer('valeurdix');
            $table->foreignId('user_id')->constrained(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autres_composantes_cout_embauches');
    }
};
