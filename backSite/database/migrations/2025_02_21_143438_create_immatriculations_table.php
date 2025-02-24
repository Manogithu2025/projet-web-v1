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
        Schema::create('immatriculations', function (Blueprint $table) {
            $table->id();
            $table->string("nomClient", 50);
            $table->string("typeProjet", 50);
            $table->date("dateSignature");
            $table->date("traitementNotaireD");
            $table->date("traitementNotaireR");
            $table->string("nomNotaire", 50);
            $table->string("nif", 10);
            $table->date("dateDepotD");
            $table->date("dateDepotR");
            $table->double("montantVenal");
            $table->date("dateVenal");
            $table->date("dateSaveD");
            $table->date("dateSaveR");
            $table->date("dateExpD");
            $table->date("dateExpR");
            $table->date("periodeReqR");
            $table->date("periodeReqD");
            $table->double("montantReq");
            $table->date("payeReq");
            $table->string("numReq");
            $table->date("dateJr");
            $table->string("numDossier", 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('immatriculations');
    }
};
