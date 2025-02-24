<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\immatriculation;
use App\Models\suiviDossier;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function dashboard(){
        $projects = suiviDossier::all();
        $immatricules = immatriculation::all();
        return view("dashboard.index", compact("projects", "immatricules"));
    }

    public function suiviEdit(suiviDossier $suivi){
        return view("dashboard.suiviEdit", compact("suivi"));
    }

    public function suiviEditStore(suiviDossier $suivi, Request $request, $id){
       try{
       $request->validate([
            "nomClient" => ["required", "string"],
            "typeProjet" => ["required", "string"],
            "motif" => ["required", "string"],
            "localite" => ["required", "string"],
            "dateTravailT" => ["required", "date"],
            "periodeTravail" => ["required", "string"],
            "dateDepototr" => ["required", "date"],
            "numDepot" => ["required"],
            "mensionAgro" => ["required", "string"],
            "mensionCad" => ["required", "string"],
            "mensionUrb" => ["required", "string"],
            "dateRetrait" => ["required", "date"],
            "dateSignature" => ["required", "date"],
            "dateLivraison" => ["required", "date"],
            "dureeTotal" => ["required", "string"],
            
        ]);
        $suivi = suiviDossier::find($id);
        $suivi->update($request->all());
        return redirect()->route("dashboard")->with("success", "Le dossier a été modifier avec succès");

       }catch(\Illuminate\Validation\ValidationException $e){
        dd($e->errors());
       }
    }
    public function projectDelete(suiviDossier $projet){
        $projet->delete();
        return redirect()->route("dashboard")->with("success", "Le dossier a été supprimer avec succès");
    }

    public function immaEdit(immatriculation $immatricule){
        return view("dashboard.immaEdit", compact("immatricule"));
    }

    public function immaEditStore(immatriculation $immatricule, Request $request, $id){
        try{
            $request->validate([
                "nomClient" => ["required", "string", "min:4"],
                "typeProjet" => ["required", "string", "min:4"],
                "dateSignature" => ["required", "date"],
                "traitementNotaireD" => ["required", "date"],
                "traitementNotaireR" => ["required", "date"],
                "nomNotaire" => ["required", "string", "min:5"], 
                "nif" => ["required"],
                "dateDepotD" => ["required", "date"],
                "dateDepotR" => ["required", "date"],
                "montantVenal" => ["required"],
                "dateVenal" => ["required", "date"],
                "dateSaveD" => ["required", "date"],
                "dateSaveR" => ["required", "date"],
                "dateExpD" => ["required", "date"],
                "dateExpR" => ["required", "date"],
                "periodeReqR" => ["required", "date"],
                "periodeReqD" => ["required", "date"],
                "montantReq" => ["required"],
                "payeReq" => ["required", "date"],
                "numReq" => ["required"],
                "dateJr" => ["required", "date"],
                "numDossier" => ["required"],
                
            ]);
            $immatricule = immatriculation::find($id);
            $immatricule->update($request->all());
            return redirect()->route("dashboard")->with("success", "Le dossier a été modifier avec succès");


       

           }catch(\Illuminate\Validation\ValidationException $e){
            dd($e->errors());
           }
    }

    public function immaDelete(immatriculation $immatricule){
        $immatricule->delete();
        return redirect()->route("dashboard")->with("success", "Le dossier a été supprimé avec succès");
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->regenerate();
        return redirect()->route("login")->with("success", "Déconnexion Réussi");
    }
}

