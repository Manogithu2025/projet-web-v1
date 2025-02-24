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
        <div class="header" style="text-align: center;">SUIVRE MON DOSSIER DE PLAN VISE</div>
        <div class="search-box">
            <form action="">
                <input type="search" value="" name="search">
            </form>
            <button type="submit">CHERCHER</button>
        </div>
  
<div class="result">
    @if(request()->has('search') && request()->search != '')
    @forelse ($suivis as $suivi)
        <div class="section-title">[NUMERO DE DOSSIER DE PLAN-VISE] >> {{ $suivi->numDepot }}</div>
        <div class="info">
         
            <p class="betwenn"><b>Nom du client :</b> {{ $suivi->nomClient }}</p>
            <p class="betwenn"><b>Type de projet :</b> {{ $suivi->typeProjet }}</p>
            <p class="betwenn"><b>Lieu du projet :</b> {{ $suivi->localite}}</p>
            <p class="betwenn"><b>Date de travail sur le terrain :</b> {{ $suivi->dateTravailT }}</p>
            <p class="betwenn"><b>Période de traitement du bureau :</b> {{ $suivi->periodeTravail }}</p>
            <p class="betwenn"><b>Date de dépôt OTR :</b> {{ $suivi->dateDepototr }}</p>
            <p class="betwenn"><b>Numéro de dépôt OTR :</b> {{ $suivi->numDepot }}</p>
            <p class="betwenn"><b>Mension du service Agrofoncier :</b> {{ $suivi->mensionAgro }}</p>
            <p class="betwenn"><b>Mension du service Cadastre :</b> {{ $suivi->mensionCad }}</p>
            <p class="betwenn"><b>Mension du service d'Urbanisme :</b> {{ $suivi->mensionUrb }}</p>
            <p class="betwenn"><b>Date de retrait à OTR :</b> {{ $suivi->dateRetrait }}</p>
            <p class="betwenn"><b>Date de signature du G.E.A :</b> {{$suivi->dateSignature }}</p>
            <p class="betwenn"><b>Date de livraison :</b> {{ $suivi->dateLivraison }}</p>
            <p class="betwenn"><b>Durée totale du projet :</b> {{ $suivi->dureeTotal }}</p>
            <p class="betwenn"><b>Motif de la durée du projet :</b> {{ $suivi->motif }}</p>
        </div>
    @empty
        <p>Aucune information trouvée pour ce numéro de réquisition.</p>
    @endforelse
@endif

 
</div>

        
    </div>
</body>
</html>
