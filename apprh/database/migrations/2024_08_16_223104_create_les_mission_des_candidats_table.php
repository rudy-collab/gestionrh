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
        Schema::create('les_mission_des_candidats', function (Blueprint $table) {
            $table->id();
            $table->string('mission1');
            $table->string('mission2');
            $table->string('mission3');
            $table->string('mission4');
            $table->string('mission5');
            $table->string('mission6');
            $table->string('mission7');
            $table->string('mission8');
            $table->string('mission9');
            $table->string('mission10');
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
        Schema::dropIfExists('les_mission_des_candidats');
    }
};
