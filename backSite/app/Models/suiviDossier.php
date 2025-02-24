<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class suiviDossier extends Model
{
    protected $fillable = [
        "nomClient",
        "typeProjet",
        "localite",
        "motif",
        "dateTravailT",
        "periodeTravail",
        "dateDepototr",
        "numDepot",
        "mensionAgro",
        "mensionCad",
        "mensionUrb",
        "dateRetrait",
        "dateSignature",
        "dateLivraison",
        "dureeTotal",
        "lastInfo",
    ];
}
