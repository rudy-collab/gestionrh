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
        Schema::create('avantages_candidats', function (Blueprint $table) {
            $table->id();
            $table->string('avantage1');
            $table->string('avantage2');
            $table->string('avantage3');
            $table->string('avantage4');
            $table->string('avantage5');
            $table->string('avantage6');
            $table->string('avantage7');
            $table->string('avantage8');
            $table->string('avantage9');
            $table->string('avantage10');
            $table->foreignId('candidat_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avantages_candidats');
    }
};
