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
        Schema::create('canaux_recrutements', function (Blueprint $table) {
            $table->id();
            $table->integer('sitesdemploienligne');
            $table->integer('reseauxsociaux');
            $table->integer('siteswebdentreprise');
            $table->integer('agencesderecrutement');
            $table->integer('forumsetgroupesspecialises');
            $table->integer('journauxetmagazines');
            $table->integer('ecolesetuniversites');
            $table->integer('evenementsderecrutement');
            $table->integer('partenariatsavecassociationspro');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('canaux_recrutements');
    }
};
