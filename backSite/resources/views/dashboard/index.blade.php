<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title>Dashboard </title>
      <link rel="stylesheet" href="dashboard.css" />
      <!-- Font Awesome Cdn Link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    </head>
    <body>
      <div class="container">
        <nav>
          <ul>
            <li><a href="#attendance" class="logo">
              {{-- <img src="./pic/logo.jpg"> --}}
              <span class="nav-item">Admin</span>
            </a></li>
            <li><a href="#attendance">
              <i class="fas fa-menorah"></i>
              <span class="nav-item">Dashboard</span>
            </a></li>
            <li><a href="#suivi">
              <i class="fas fa-chart-bar"></i>
              <span class="nav-item">Suivi</span>
            </a>
          </li>
          <li><a href="#immatriculation">
            <i class="fas fa-chart-bar"></i>
            <span class="nav-item">Immatriculation</span>
          </a>
        </li>
        <li><a href="#Listimmatriculation">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">Liste Immatriculation</span>
        </a>
      </li>
     <li>
      <form style="margin: 18px 30px; width: 100%; " action="{{ route("logout") }}" method="POST">
        @csrf
        <button style="text-align: center; border: 1px solid red; background: rgb(187, 84, 84); color: #fff;padding: 6px 20px; cursor: pointer;">Déconnexion</button>

      </form>
     </li>
            {{-- <li><a href="#">
              <i class="fas fa-database"></i>
              <span class="nav-item">Report</span>
            </a></li>
            <li><a href="#">
              <i class="fas fa-chart-bar"></i>
              <span class="nav-item">Attendance</span>
            </a></li>
            <li><a href="#">
              <i class="fas fa-cog"></i>
              <span class="nav-item">Setting</span>
            </a></li>
    
            <li><a href="#" class="logout">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">Log out</span>
            </a></li> --}}
          </ul>
        </nav>
    
    
        <section class="main">
          @if (session()->has("success"))
              <div class="alert-info">
                 {{ session("success") }} 
              </div>
          @endif
          <div class="main-top" style="display: flex; align-items: center; justify-content: space-between;">
            <h1>Suivi de Dossier</h1>
            
          </div>
      
          <section class="attendance" id="attendance">
            <div class="attendance-list">
             <div class="title" style="display: flex; align-items: center; justify-content: space-between;">
              <h1>Liste des projets</h1>
              <td class="lik"><a href="" style="width: 20%; border: 1px solid green; text-align: center">Ajouter</a></td>
             </div>
              <table class="table">
                
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Type de projet</th>
                    <th>Localité</th>
                    <th>Date traitement</th>
                    <th>N° dépôt</th>
                    <th>Durée Total</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                    <th>Details</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($projects as $projet)
                  <tr>
                    <td>{{ $projet->id }}</td>
                    <td>{{ $projet->typeProjet }}</td>
                    <td>{{ $projet->localite }}</td>
                    <td>{{ $projet->periodeTravail }}</td>
                    <td>{{ $projet->numDepot }}</td>
                    <td>{{ $projet->dureeTotal }}</td>
                    <td class="lik"><a href="{{ route("suiviEdit", $projet->id) }}" style="width: 20%">Modifier</a></td>
                    <td>
                      <form action="{{ route("projectDelete", $projet->id )}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button>Supprimer</button>
                      </form>
                    </td>
                    <td class="lik"><a href="" style="width: 20%">Détails</a></td>
                   
                  </tr>
                  @endforeach
                 
                </tbody>
              </table>
            </div>
          </section>
          <section class="attendance" id="Listimmatriculation">
            <div class="attendance-list">
              <h1>Liste de dossier immatriculé</h1>
              <td class="lik"><a href="" style="width: 20%">Ajouter</a></td>
              <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nom client</th>
                    <th>Date signature</th>
                    <th>Montant vénal</th>
                    <th>Nom Notaire</th>
                    <th>N° Dossier</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                    <th>Details</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($immatricules as $immatricule)
                  <tr>
                    <td>{{ $immatricule->id }}</td>
                    <td>{{ $immatricule->nomClient }}</td>
                    <td>{{ $immatricule->dateSignature }}</td>
                    <td>{{ $immatricule->montantVenal }}</td>
                    <td>{{ $immatricule->nomNotaire }}</td>
                    <td>{{ $immatricule->numDossier }}</td>
                    <td class="lik"><a href="{{ route("immaEdit", $immatricule->id) }}" style="width: 20%">Modifier</a></td>
                    <td>
                      <form action="{{ route("immaDelete", $immatricule->id) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button>Supprimer</button>
                      </form>
                    </td>
                    <td class="lik"><a href="" style="width: 20%">Détails</a></td>
                  </tr>
                  @endforeach
                 
                </tbody>
              </table>
            </div>
          </section>

          <section class="formSuivis" id="suivi">
            <div class="formSuivi">
              <div class="form-container">
                  <form action="{{ route("suviStore") }}" method="POST">
                    @csrf
                    <h1 class="imma">DOSSIER DE SUIVI</h1>
                   <div class="div0">
                    <div class="div1">
                      <div class="form-group">
                        <label for="nom-client">Nom du Client :</label>
                        <input type="text" id="nom-client" name="nomClient">
                        @error("nomClient")
                          <div class="alert-danger">
                            {{ $message }}
                          </div>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="projet">Type de Projet :</label>
                      <select id="projet" name="typeProjet">
                          <option value="residential">Plan-Vise</option>
                          <option value="commercial">Plan parcellaire </option>
                          <option value="industrial">Implantation</option>
                          <option value="public">Études et conception</option>
                          <option value="public">Adduction d'eau potable</option>
                          <option value="public">Délimitation de domaine et levé</option>
                          <option value="public">Plan de découlement</option>
                      </select>
                      @error("typeProjet")
                      <div class="alert-danger">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                    <div class="form-group">
                        <label for="localite">Lieu du projet :</label>
                        <input type="text" id="localite" name="localite">
                        @error("localite")
                        <div class="alert-danger">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="date-travail-terrain">Date de Travail sur le Terrain :</label>
                        <input type="date" id="date-travail-terrain" name="dateTravailT">
                        @error("dateTravailT")
                        <div class="alert-danger">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="periode-bureau">Période de Traitement au Bureau :</label>
                        <input type="text" id="periode-bureau" name="periodeTravail">
                        @error("periodeTravail")
                        <div class="alert-danger">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
               
                     </div>
                     <div class="div2">
                     
                    <div class="form-group">
                        <label for="mensionAgro">Mentions du Service Agrofoncier :</label>
                        <select id="mensionAgro" name="mensionAgro">
                          <option>Favorable</option>
                          <option>Rejet(Empiétment)</option>
                          <option>Rejet(Déjà visé)</option>
                          <option>Rejet(R.A)</option>
                          <option>Rejet(Zone d'équipement)</option>
                          <option>Rejet(Emprise public)</option>
                          <option>Rejet(Zone d'utilité public)</option>
                          <option>Rejet(Pas besoin)</option>
                      </select>
                      @error("mensionAgro")
                    <div class="alert-danger">
                      {{ $message }}
                    </div>
                  @enderror
                    </div>
                    <div class="form-group">
                        <label for="mensionUrb">Mentions du Service d'urbanisme :</label>
                        <select id="mensionUrb" name="mensionUrb">
                          <option>Favorable</option>
                          <option>Rejet(Empiétment)</option>
                          <option>Rejet(Déjà visé)</option>
                          <option>Rejet(R.A)</option>
                          <option>Rejet(Zone d'équipement)</option>
                          <option>Rejet(Emprise public)</option>
                          <option>Rejet(Zone d'utilité public)</option>
                          <option>Rejet(Pas besoin)</option>
                      </select>
                      @error("mensionUrb")
                      <div class="alert-danger">
                        {{ $message }}
                      </div>
                    @enderror
                    </div>
                    <div class="form-group">
                      <label for="mensionCad">Mentions du Service du cadastre :</label>
                      <select id="mensionCad" name="mensionCad">
                        <option>Favorable</option>
                        <option>Rejet(Empiétment)</option>
                        <option>Rejet(Déjà visé)</option>
                        <option>Rejet(R.A)</option>
                        <option>Rejet(Zone d'équipement)</option>
                        <option>Rejet(Emprise public)</option>
                        <option>Rejet(Zone d'utilité public)</option>
                        <option>Rejet(Pas besoin)</option>
                    </select>
                    @error("mensionCad")
                    <div class="alert-danger">
                      {{ $message }}
                    </div>
                  @enderror
                  </div>
                    <div class="form-group">
                        <label for="date-retrait">Date de Retrait à OTR :</label>
                        <input type="date" id="date-retrait" name="dateRetrait">
                        @error("dateRetrait")
                        <div class="alert-danger">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                   
                     </div>
                     <div class="div3">
                      <div class="form-group">
                        <label for="date-livraison">Date de Livraison :</label>
                        <input type="date" id="date-livraison" name="dateLivraison">
                        @error("dateLivraison")
                        <div class="alert-danger">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="duree-projet">Durée Totale du Projet :</label>
                        <input type="text" id="duree-projet" name="dureeTotal">
                        @error("dureeTotal")
                        <div class="alert-danger">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="motif">Motif de la durée du projet:</label>
                        <select id="motif" name="motif">
                          <option>Le client à payer à temps les factures de traitement de son dossier</option>
                          <option>Le client n'a pas payer à temps les factures de traitement de son dossier</option>
                          <option>A cause du rejet</option>
                      </select>
                      @error("motif")
                        <div class="alert-danger">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="date-depot-otr">Date de Dépôt à l'OTR :</label>
                      <input type="date" id="date-depot-otr" name="dateDepototr">
                      @error("dateDepototr")
                      <div class="alert-danger">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="date-signature-gea">Date de Signature du G.E.A :</label>
                    <input type="date" id="date-signature-gea" name="dateSignature">
                    @error("dateSignature")
                    <div class="alert-danger">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="numDepot">Numéro du dossier :</label>
                  <input type="text" id="numDepot" name="numDepot">
                  @error("dateSignature")
                  <div class="alert-danger">
                    {{ $message }}
                  </div>
                @enderror
              </div>
                     </div>
                   </div>
                   <div class="form-group">
                    <input type="submit" value="Soumettre">
                </div>
                  </form>
              </div>
            </div>

          </section>

          <section class="formSuivis" id="immatriculation">
            <div class="formSuivi">
              <div class="form-container">
                <h1 class="imma">DOSSIER IMMATRICULATION</h1>
                  <form action="{{ route("immatriculationStrore") }}" method="POST">
                    @csrf
                   <div class="div0">
                    <div class="div1">
                      <div class="form-group">
                        <label for="nom-client">Nom du Client :</label>
                        <input type="text" id="nom-client" name="nomClient">
                    </div>
                    <div class="form-group">
                      <label for="typeProjet">Type de Projet :</label>
                      <select id="typeProjet" name="typeProjet">
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
                        <input type="date" id="dateSignature" name="dateSignature">
                    </div>
                    <div class="form-group">
                        <label for="traitementNotaireD">Période de Traitement au Bureau du notaire(D) :</label>
                        <input type="date" id="traitementNotaireD" name="traitementNotaireD">
                    </div>
                    <div class="form-group">
                      <label for="traitementNotaireR">Période de Traitement au Bureau du notaire(R) :</label>
                      <input type="date" id="traitementNotaireR" name="traitementNotaireR">
                  </div>
                  <div class="form-group">
                    <label for="nomNotaire">Nom du Notaire :</label>
                    <input type="text" id="nomNotaire" name="nomNotaire">
                </div>
                <div class="form-group">
                  <label for="nif">NIF:</label>
                  <input type="text" id="nif" name="nif">
              </div>
              <div class="form-group">
                <label for="dateDepotD">Date de dépot et de retrait à OTR pour demande de valeur(D) :</label>
                <input type="date" id="dateDepotD" name="dateDepotD">
            </div>
                     </div>
                     <div class="div2">
                     
                      <div class="form-group">
                        <label for="dateDepotR">Date de dépot et de retrait à OTR pour demande de valeur(R) :</label>
                        <input type="date" id="dateDepotR" name="dateDepotR">
                    </div>
                    <div class="form-group">
                        <label for="montantVenal">Montant de la valeur vénale :</label>
                        <input type="number" id="montantVenal" name="montantVenal">
                    </div>
                    <div class="form-group">
                      <label for="date">Date de paiement de la valeur vénale :</label>
                      <input type="date" id="dateVenal" name="dateVenal">
                  </div>
                    <div class="form-group">
                      <label for="dateSaveD">Date de dépot et de l'enrégistrement de l'OTR (D) :</label>
                      <input type="date" id="dateSaveD" name="dateSaveD">
                  </div>
                  <div class="form-group">
                    <label for="dateSaveR">Date de dépot et de l'enrégistrement de l'OTR (R) :</label>
                    <input type="date" id="dateSaveR" name="dateSaveR">
                </div>
                <div class="form-group">
                  <label for="dateExpD">Période de l'expédition (D) :</label>
                  <input type="date" id="dateSaveD" name="dateExpD">
                </div>
                <div class="form-group">
                  <label for="dateExpR">Période de l'expédition (R) :</label>
                  <input type="date" id="dateSaveR" name="dateExpR">
                </div>
                 
                     </div>
                  
                     <div class="div3">
                      <div class="form-group">
                        <label for="periodeReqR">Période de demande de réquisition (D) :</label>
                        <input type="date" id="periodeReqR" name="periodeReqR">
                      </div>
                      <div class="form-group">
                        <label for="periodeReqD">Période de demande de réquisition (R) :</label>
                        <input type="date" id="periodeReqD" name="periodeReqD">
                      </div>
                     
                    <div class="form-group">
                      <label for="payeReq">Date de paiement de liquidation :</label>
                      <input type="date" id="payeReq" name="payeReq">
                  </div>
                  <div class="form-group">
                    <label for="numReq">Numéro de réquisition :</label>
                    <input type="text" id="numReq" name="numReq">
                </div>
                <div class="form-group">
                  <label for="dateJr">Date de publication au journal Officiel de la république Togolaise :</label>
                  <input type="date" id="dateJr" name="dateJr">
              </div>
              <div class="form-group">
                <label for="numDossier">Numéro du dossier:</label>
                <input type="number" id="numDossier" name="numDossier">
            </div>
            <div class="form-group">
              <label for="montantReq">Montant de liquidation de réquisition:</label>
              <input type="text" id="montantReq" name="montantReq">
          </div>
          <div class="form-group">
            <label for="numero-depot-otr">Numéro de dépot à OTR :</label>
            <input type="text" id="numero-depot-otr" name="numDepot">
            @error("numDepot")
            <div class="alert-danger">
              {{ $message }}
            </div>
          @enderror
        </div>
            <div class="form-group">
              <input type="submit" value="Soumettre">
          </div>
                     </div>
                   </div>
                   
                  </div>
                  </form>
              </div>
            </div>

          </section>
          
        </section>
        <section class="formSuivi" id="Listimmatriculation">
          <div class="attendance-list">
            <h1>Liste de dossier immatriculé</h1>
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Type de projet</th>
                  <th>Localité</th>
                  <th>Date traitement</th>
                  <th>N° dépôt</th>
                  <th>Durée Total</th>
                  <th>Modifier</th>
                  <th>Supprimer</th>
                  <th>Details</th>
                  <th>Ajouter</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($projects as $projet)
                <tr>
                  <td>{{ $projet->id }}</td>
                  <td>{{ $projet->typeProjet }}</td>
                  <td>{{ $projet->localite }}</td>
                  <td>{{ $projet->periodeTravail }}</td>
                  <td>{{ $projet->numDepot }}</td>
                  <td>{{ $projet->dureeTotal }}</td>
                  <td class="lik"><a href="{{ route("suiviEdit", $projet->id) }}" style="width: 20%">Modifier</a></td>
                  <td><button>Supprimer</button></td>
                  <td class="lik"><a href="" style="width: 20%">Détails</a></td>
                  <td class="lik"><a href="" style="width: 20%">Ajouter</a></td>
                </tr>
                @endforeach
               
              </tbody>
            </table>
          </div>
        </section>
      </div>
    
    </body>
    </html>
    </span>