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
        Schema::create('infos_contrat_candidats', function (Blueprint $table) {
            $table->id();
            $table->string('servicerattachment');
            $table->string('responsableservice');
            $table->string('lieutravail');
            $table->string('datedebutcontrat');
            $table->string('nbremoisperiodeessai');
            $table->string('remunerationbrute');
            $table->string('nbremoisremunerationbrute');
            $table->string('typecontrat');
            $table->string('dureecontrat');
            $table->string('horairetravail');
            $table->string('jourdebut');
            $table->string('jourfin');
            $table->string('heuredebut');
            $table->string('heurefin');
            $table->string('nbrejoursconge');
            $table->string('datelimitereponse');
            $table->foreignId('candidat_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infos_contrat_candidats');
    }
};
