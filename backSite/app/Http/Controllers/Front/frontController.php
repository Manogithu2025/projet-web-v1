<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\immatriculation;
use App\Models\suiviDossier;
use Illuminate\Http\Request;

class frontController extends Controller
{
    public function index(){
        return view("Front.index");
    }

    public function suivi(Request $request){
        $blog = suiviDossier::query();

        if ($search = $request->search) {
            $blog->where('numDepot', 'LIKE', '%' . $search . '%');
        }
        
        $suivis = $blog->latest()->get(); // Correction ici
        
        return view("Front.suivi", compact("suivis"));
        
    }

    public function immatriculation(Request $request){
        $blog = immatriculation::query();

        if ($search = $request->search) {
            $blog->where('numDossier', 'LIKE', '%' . $search . '%');
        }
        
        $immatricules = $blog->latest()->get(); // Correction ici
        
        
        return view("Front.immatricule", compact("immatricules"));
    }
    public function suviStore(Request $request){
   
           try{
            $validated = $request->validate([
                "nomClient" => ["required", "string", "min:4"],
                "typeProjet" => ["required", "string", "min:4"],
                "motif" => ["required", "string", "min:4"],
                "localite" => ["required", "string", "min:4"],
                "dateTravailT" => ["required", "date"],
                "periodeTravail" => ["required", "string", "min:4"],
                "dateDepototr" => ["required", "date"],
                "numDepot" => ["required"],
                "mensionAgro" => ["required", "string", "min:4"],
                "mensionCad" => ["required", "string", "min:4"],
                "mensionUrb" => ["required", "string", "min:4"],
                "dateRetrait" => ["required", "date"],
                "dateSignature" => ["required", "date"],
                "dateLivraison" => ["required", "date"],
                "dureeTotal" => ["required", "string", "min:4"],
                
            ]);
            // dd($validated);
            suiviDossier::query()->create($validated);
            return redirect()->back()->with("success", "L'enrégistrement du dossier éffectuer avec succès");
       

           }catch(\Illuminate\Validation\ValidationException $e){
            dd($e->errors());
           }
    }

    public function immatriculationStrore(Request $request){
        try{
            $validated = $request->validate(
                [
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
                ]
                );
                // dd($validated);
                immatriculation::query()->create($validated);
                return redirect()->route("dashboard")->with("success", "Insertion avec succès");
        }catch(\Illuminate\Validation\ValidationException $e){
            dd($e->errors());
        }
    }
}
