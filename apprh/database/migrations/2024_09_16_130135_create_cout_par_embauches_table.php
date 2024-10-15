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
        Schema::create('cout_par_embauches', function (Blueprint $table) {
            $table->id();
            $table->integer('sitesdemploienligne');
            $table->integer('reseauxsociaux');
            $table->integer('siteswebdentreprise');
            $table->integer('agencesderecrutement');
            $table->integer('forumsetgroupesspecialises');
            $table->integer('journauxetmagazines');
            $table->integer('ecolesetuniversites');
            $table->integer('evenementsderecrutement');
            $table->integer('bulletinsinternes');
            $table->integer('recrutementdirecte');
            $table->integer('fraisderecrutement');
            $table->integer('fraisdeformation');
            $table->integer('tempsderecrutement');
            $table->integer('fraisadministratifs');
            $table->integer('autresfrais');
            $table->foreignId('user_id')->constrained();   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cout_par_embauches');
    }
};
