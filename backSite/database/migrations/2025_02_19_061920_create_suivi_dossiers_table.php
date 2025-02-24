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
        Schema::create('suivi_dossiers', function (Blueprint $table) {
            $table->id();
            $table->string("nomClient", 100);
            $table->string("typeProjet", 50);
            $table->string("motif", 100);
            $table->string("localite", 100);
            $table->date("dateTravailT");
            $table->string("periodeTravail", 100);
            $table->date("dateDepototr");
            $table->integer("numDepot")->unique();
            $table->string("mensionAgro", 50);
            $table->string("mensionCad", 50);
            $table->string("mensionUrb", 50);
            $table->date("dateRetrait");
            $table->date("dateSignature");
            $table->date("dateLivraison");
            $table->string("dureeTotal", 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suivi_dossiers');
    }
};
