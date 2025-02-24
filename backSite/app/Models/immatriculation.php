<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class immatriculation extends Model
{
    protected $fillable = [
        "nomClient",
        "typeProjet",
        "dateSignature",
        "traitementNotaireD",
        "traitementNotaireR",
        "nomNotaire", 
        "nif",
        "dateDepotD",
        "dateDepotR",
        "montantVenal",
        "dateVenal",
        "dateSaveD",
        "dateSaveR",
        "dateExpD",
        "dateExpR",
        "periodeReqR",
        "periodeReqD",
        "montantReq",
        "payeReq",
        "numReq",
        "dateJr",
        "numDossier",
    ];
}
