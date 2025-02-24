<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suivi de Réquisition</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="header" style="text-align: center;">SUIVRE MON DOSSIER D'IMMATRICULATION</div>
        <div class="search-box">
            <form action="">
                <input type="search" value="" name="search">
            </form>
            <button type="submit">CHERCHER</button>
        </div>
  
<div class="result">
    @if(request()->has('search') && request()->search != '')
    @forelse ($immatricules as $immatricule)
        <div class="section-title">[NUMERO DE MON DOSSIER] >> {{ $immatricule->numDossier }}</div>
        <div class="info">
            <p class="betwenn"><b>Nom du client :</b> {{ $immatricule->nomClient }}</p>
            <p class="betwenn"><b>Type de projet :</b> {{ $immatricule->typeProjet }}</p>
            <p class="betwenn"><b>Date de signature du contrat :</b> {{ $immatricule->dateSignature}}</p>
            <p class="betwenn"><b>Période de traitement du bureau du Notaire :</b> D: {{ $immatricule->traitementNotaireD }}   R: {{ $immatricule->traitementNotaireR }} </p>
            <p class="betwenn"><b>Nom du Notaire :</b> {{ $immatricule->nomNotaire }}</p>
            <p class="betwenn"><b>NIF :</b> {{ $immatricule->nif }}</p>
            <p class="betwenn"><b>Date de dépôt et de retrait à l'otr pour demande de valeur:</b>  D: {{ $immatricule->dateDepotD }}  R: {{ $immatricule->dateDepotR }}</p>
            <p class="betwenn"><b>Montant de la valeure vénale :</b> {{ $immatricule->montantVenal }} </p>
            <p class="betwenn"><b>Date de paiement de la valeur vénale :</b> {{ $immatricule->dateVenal }}</p>
            <p class="betwenn"><b>Date de dépôt et de retrait à l'otr pour l'enrégistrement:</b> D: {{ $immatricule->dateSaveD }}  R: {{ $immatricule->dateSaveR }}</p>
            <p class="betwenn"><b>Période d'expédition:</b> {{ $immatricule->dateRetrait }}</p>
            <p class="betwenn"><b>Période de demande de réquisition :</b> D: {{ $immatricule->periodeReqD }}  R: {{ $immatricule->periodeReqR }}</p>
            <p class="betwenn"><b>Montant de liquidation  :</b> {{ $immatricule->montantReq }}</p>
            <p class="betwenn"><b>Date de paiement de la liquidation :</b> {{ $immatricule->payeReq }}</p>
            <p class="betwenn"><b>Numéro de réquisition :</b> {{ $immatricule->numReq }}</p>
            <p class="betwenn"><b>Date de publication au journal officiel de la république Togolaise :</b> {{ $immatricule->dateJr }}</p>
            <p class="betwenn"><b>Lien officiel de suivi de réquisition  :</b> <a href="https://e-foncier.otr.tg">OTR</a></p>
        </div>
    @empty
        <p>Aucune information trouvée pour ce numéro de réquisition.</p>
    @endforelse
@endif

 
</div>

        
    </div>
</body>
</html>
