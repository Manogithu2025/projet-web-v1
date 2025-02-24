<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | Edit</title>
    <link rel="stylesheet" href="dashboard.css">
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
    <section class="formSuivis" id="immatriculation">
        <div class="formSuivi">
          <div class="form-container">
            <h1 class="imma">MODIFICATION DOSSIER IMMATRICULATION</h1>
              <form action="{{ route("immaEditStore", $immatricule->id) }}" method="POST">
                @csrf
                @method("PUT")
               <div class="div0">
                <div class="div1">
                  <div class="form-group">
                    <label for="nom-client">Nom du Client :</label>
                    <input type="text" value="{{ $immatricule->nomClient }}" id="nom-client" name="nomClient">
                </div>
                <div class="form-group">
                  <label for="typeProjet">Type de Projet :</label>
                  <select id="typeProjet" name="typeProjet">
                    <option value="{{ $immatricule->typeProjet }}">{{ $immatricule->typeProjet }}</option>
                      <option value="residential">Plan-Vise</option>
                      <option value="commercial">Plan parcellaire </option>
                      <option value="industrial">Implantation</option>
                      <option value="public">Études et conception</option>
                      <option value="public">Adduction d'eau potable</option>
                      <option value="public">Délimitation de domaine et levé</option>
                      <option value="public">Plan de découlement</option>
                  </select>
              </div>
                
                <div class="form-group">
                    <label for="dateSignature">Date de signature du contrat :</label>
                    <input type="date" id="dateSignature" value="{{ $immatricule->dateSignature }}" name="dateSignature">
                </div>
                <div class="form-group">
                    <label for="traitementNotaireD">Période de Traitement au Bureau du notaire(D) :</label>
                    <input type="date" id="traitementNotaireD" value="{{ $immatricule->traitementNotaireD }}" name="traitementNotaireD">
                </div>
                <div class="form-group">
                  <label for="traitementNotaireR">Période de Traitement au Bureau du notaire(R) :</label>
                  <input type="date" id="traitementNotaireR" value="{{ $immatricule->traitementNotaireR }}" name="traitementNotaireR">
              </div>
              <div class="form-group">
                <label for="nomNotaire">Nom du Notaire :</label>
                <input type="text" id="nomNotaire" value="{{ $immatricule->nomNotaire }}" name="nomNotaire">
            </div>
            <div class="form-group">
              <label for="nif">NIF:</label>
              <input type="text" id="nif" value="{{ $immatricule->nif }}" name="nif">
          </div>
          <div class="form-group">
            <label for="dateDepotD">Date de dépot et de retrait à OTR pour demande de valeur(D) :</label>
            <input type="date" id="dateDepotD" value="{{ $immatricule->dateDepotD }}" name="dateDepotD">
        </div>
                 </div>
                 <div class="div2">
                 
                  <div class="form-group">
                    <label for="dateDepotR">Date de dépot et de retrait à OTR pour demande de valeur(R) :</label>
                    <input type="date" id="dateDepotR" value="{{ $immatricule->dateDepotR }}" name="dateDepotR">
                </div>
                <div class="form-group">
                    <label for="montantVenal">Montant de la valeur vénale :</label>
                    <input type="number" id="montantVenal" value="{{ $immatricule->montantVenal }}" name="montantVenal">
                </div>
                <div class="form-group">
                  <label for="date">Date de paiement de la valeur vénale :</label>
                  <input type="date" id="dateVenal" value="{{ $immatricule->dateVenal }}" name="dateVenal">
              </div>
                <div class="form-group">
                  <label for="dateSaveD">Date de dépot et de l'enrégistrement de l'OTR (D) :</label>
                  <input type="date" id="dateSaveD" value="{{ $immatricule->dateSaveD }}" name="dateSaveD">
              </div>
              <div class="form-group">
                <label for="dateSaveR">Date de dépot et de l'enrégistrement de l'OTR (R) :</label>
                <input type="date" id="dateSaveR" value="{{ $immatricule->dateSaveR }}" name="dateSaveR">
            </div>
            <div class="form-group">
              <label for="dateExpD">Période de l'expédition (D) :</label>
              <input type="date" id="dateSaveD" value="{{ $immatricule->dateSaveD }}" name="dateExpD">
            </div>
            <div class="form-group">
              <label for="dateExpR">Période de l'expédition (R) :</label>
              <input type="date" id="dateSaveR" value="{{ $immatricule->dateExpR }}" name="dateExpR">
            </div>
             
                 </div>
              
                 <div class="div3">
                  <div class="form-group">
                    <label for="periodeReqR">Période de demande de réquisition (D) :</label>
                    <input type="date" id="periodeReqR" value="{{ $immatricule->periodeReqR }}" name="periodeReqR">
                  </div>
                  <div class="form-group">
                    <label for="periodeReqD">Période de demande de réquisition (R) :</label>
                    <input type="date" id="periodeReqD" value="{{ $immatricule->periodeReqD }}" name="periodeReqD">
                  </div>
                 
                <div class="form-group">
                  <label for="payeReq">Date de paiement de liquidation :</label>
                  <input type="date" id="payeReq" value="{{ $immatricule->payeReq }}" name="payeReq">
              </div>
              <div class="form-group">
                <label for="numReq">Numéro de réquisition :</label>
                <input type="text" id="numReq" value="{{ $immatricule->numReq }}" name="numReq">
            </div>
            <div class="form-group">
              <label for="dateJr">Date de publication au journal Officiel de la république Togolaise :</label>
              <input type="date" id="dateJr" value="{{ $immatricule->dateJr }}" name="dateJr">
          </div>
          <div class="form-group">
            <label for="numDossier">Numéro du dossier:</label>
            <input type="number" id="numDossier" value="{{ $immatricule->numDossier }}" name="numDossier">
        </div>
        <div class="form-group">
          <label for="montantReq">Montant de liquidation de réquisition:</label>
          <input type="text" id="montantReq" value="{{ $immatricule->montantReq }}" name="montantReq">
      </div>
      <div class="form-group">
        <input type="submit" value="Soumettre">
    </div>
</body>
</html>