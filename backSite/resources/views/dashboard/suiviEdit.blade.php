<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | Modifier</title>
    <link rel="stylesheet" href="dashboard.css" />
</head>
<body>
<style>
  .form-container {
    border-radius: 8px;
    max-width: 1200px;
    margin: auto;
}
.formSuivi{
    width: 70%;
    /* background-color: #fff; */
    margin: auto;
}
.formSuivi h1{
  text-align: center;
  margin: 20px 0;
}
.formSuivi .form-group{
    width: 100%;
}
.form-group input,
.form-group textarea,
.form-group select {
    width: 100%;
    padding: 10px;
    margin: 12px 0;
    border: 1px solid #ddd;
    border-radius: 4px;
}
.form-group textarea {
    resize: vertical;
}
.form-group input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
    padding: 12px 20px;
    font-size: 16px;
}
.form-group input[type="submit"]:hover {
    background-color: #45a049;
}
</style>
  
  <section class="formSuivi" id="suivi">
    <div class="formSuivi">
      <div class="form-container">
          <form action="{{ route("suiviEditStore", $suivi->id) }}" method="POST">
            @csrf
            @method("PUT")
            <h1 class="imma">MODIFIER LE DOSSIER DE SUIVI</h1>
           <div class="div0">
            <div class="div1">
              <div class="form-group">
                <label for="nom-client">Nom du Client :</label>
                <input type="text" id="nom-client" value="{{ $suivi->nomClient }}" name="nomClient">
            </div>
            <div class="form-group">
              <label for="projet">Type de Projet :</label>
              <select id="projet" name="typeProjet">
                <option value="{{ $suivi->typeProjet }}">{{ $suivi->typeProjet }}</option>
                <option>Plan-Vise</option>
                  <option>Plan parcellaire </option>
                  <option>Implantation</option>
                  <option>Études et conception</option>
                  <option>Adduction d'eau potable</option>
                  <option>Délimitation de domaine et levé</option>
                  <option>Plan de découlement</option>
              </select>
          </div>
            <div class="form-group">
                <label for="localite">Lieu du projet :</label>
                <input type="text" id="localite" value="{{ $suivi->localite }}" name="localite">
            </div>
            <div class="form-group">
                <label for="dateTravailT">Date de Travail sur le Terrain :</label>
                <input type="date" id="dateTravailT" value="{{ $suivi->dateTravailT }}" name="dateTravailT">
            </div>
            <div class="form-group">
                <label for="periodeTravail">Période de Traitement au Bureau :</label>
                <input type="text" id="periodeTravail" value="{{ $suivi->periodeTravail }}" name="periodeTravail">
            </div>
            <div class="form-group">
                <label for="dateDepototr">Date de Dépôt à l'OTR :</label>
                <input type="date" id="dateDepototr" value="{{ $suivi->dateDepototr }}" name="dateDepototr">
            </div>
            
          <div class="form-group">
            <label for="numero-depot-otr">Numéro de dépot à OTR :</label>
            <input type="text" id="numero-depot-otr" value="{{ $suivi->numDepot }}" name="numDepot">
        </div>
          
             </div>
             <div class="div2">
             
            <div class="form-group">
                <label for="mensionAgro">Mentions du Service Agrofoncier :</label>
                <select id="mensionAgro" name="mensionAgro">
                  <option value="{{ $suivi->mensionAgro }}">{{ $suivi->mensionAgro }}</option>
                  <option>Favorable</option>
                  <option>Rejet(Empiétment)</option>
                  <option>Rejet(Déjà visé)</option>
                  <option>Rejet(R.A)</option>
                  <option>Rejet(Zone d'équipement)</option>
                  <option>Rejet(Emprise public)</option>
                  <option>Rejet(Zone d'utilité public)</option>
                  <option>Rejet(Pas besoin)</option>
              </select>
            </div>
            <div class="form-group">
                <label for="mensionUrb">Mentions du Service d'urbanisme :</label>
                <select id="mensionUrb" name="mensionUrb">
                  <option value="{{ $suivi->mensionUrb }}">{{ $suivi->mensionUrb }}</option>
                  <option>Favorable</option>
                  <option>Rejet(Empiétment)</option>
                  <option>Rejet(Déjà visé)</option>
                  <option>Rejet(R.A)</option>
                  <option>Rejet(Zone d'équipement)</option>
                  <option>Rejet(Emprise public)</option>
                  <option>Rejet(Zone d'utilité public)</option>
                  <option>Rejet(Pas besoin)</option>
              </select>
            </div>
            <div class="form-group">
              <label for="mensionCad">Mentions du Service du cadastre :</label>
              <select id="mensionCad" name="mensionCad">
                <option value="{{ $suivi->mensionCad  }}">{{ $suivi->mensionCad }}</option>
                <option>Favorable</option>
                <option>Rejet(Empiétment)</option>
                <option>Rejet(Déjà visé)</option>
                <option>Rejet(R.A)</option>
                <option>Rejet(Zone d'équipement)</option>
                <option>Rejet(Emprise public)</option>
                <option>Rejet(Zone d'utilité public)</option>
                <option>Rejet(Pas besoin)</option>
            </select>
          </div>
            <div class="form-group">
                <label for="date-retrait">Date de Retrait à OTR :</label>
                <input type="date" id="date-retrait" value="{{ $suivi->dateRetrait }}" name="dateRetrait">
            </div>
            <div class="form-group">
                <label for="date-signature-gea">Date de Signature du G.E.A :</label>
                <input type="date" id="date-signature-gea" value="{{ $suivi->dateSignature }}" name="dateSignature">
            </div>
           
           
              <div class="form-group">
                <label for="date-livraison">Date de Livraison :</label>
                <input type="date" id="date-livraison" value="{{ $suivi->dateLivraison }}"  name="dateLivraison">
            </div>
            <div class="form-group">
                <label for="duree-projet">Durée Totale du Projet :</label>
                <input type="text" id="duree-projet" value="{{ $suivi->dureeTotal }}" name="dureeTotal">
            </div>
            <div class="form-group">
                <label for="motif">Motif de la durée du projet:</label>
                <select id="motif" name="motif">
                  <option value="{{ $suivi->motif }}">{{ $suivi->motif }}</option>
                  <option>Le client à payer à temps les factures de traitement de son dossier</option>
                  <option>Le client n'a pas payer à temps les factures de traitement de son dossier</option>
                  <option>A cause du rejet</option>
              </select>
            </div>
            <div class="form-group">
              <input type="submit" value="Soumettre">
          </div>
             </div>
           </div>
              
          </form>
      </div>
    </div>

  </section>
</body>
</html>