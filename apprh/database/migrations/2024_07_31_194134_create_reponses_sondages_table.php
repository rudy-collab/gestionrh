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
        Schema::create('reponses_sondages', function (Blueprint $table) {
            $table->id();
            $table->string('reponse1');
            $table->string('reponse2');
            $table->string('reponse3');
            $table->string('reponse4');
            $table->string('reponse5');
            $table->string('reponse6');
            $table->string('reponse7');
            $table->string('reponse8');
            $table->string('reponse9');
            $table->string('reponse10');
            $table->string('reponse11');
            $table->string('reponse12');
            $table->string('reponse13');
            $table->string('reponse14');
            $table->string('reponse15');
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reponses_sondages');
    }
};
