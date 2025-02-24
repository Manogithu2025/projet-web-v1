<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centre Moderne de Travaux Topographiques et d'Études Foncières</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <img src="images/n1.PNG" alt="CMTTEF" class="logo-img">
            </div>
            <ul class="nav-links">
                <li><a href="#accueil">Accueil</a></li>
                <li><a href="#about">À Propos</a></li>
                <li><a href="#services">Services</a>
                    <div class="dropdown">
                    <ul class="services">
                        <li><a href="#topo">Travaux Topographiques</a>
                        <div class="dropdown">
                            <ul class="topo">
                                <li><a href="#topo1">Levés Topographiques</a></li>
                                <li><a href="#topo2">Implantations</a></li>
                                <li><a href="#topo3">Calculs et Plans</a></li>
                            </ul>
                            </div>
                        </li>
                        <li><a href="#foncier">Études Foncières</a>
                        <div class="dropdown">
                            <ul class="foncier">
                                <li><a href="#foncier1">Évaluation Foncière</a></li>
                                <li><a href="#foncier2">Bornage</a></li>
                                <li><a href="#foncier3">Gestion des Titres Fonciers</a></li>
                            </ul>
                        </div></li>
                        <li><a href="#consult">Consultations et Conseils</a>
                        <div class="dropdown">
                            <ul class="consult">
                                <li><a href="#consult1">Accompagnement</a></li>
                                <li><a href="#consult2">Expertise</a></li>
                                <li><a href="#consult3">Conseils Techniques</a></li>
                            </ul>
                        </div></li>
                    </ul>
                  </div>
                </li>
            
                <li><a href="#projet">Projets</a>
                  <div class="dropdown">
                       <ul class="projets">
                             <li><a href="#projet_ter">Projet terminés</a>
                                <div class="dropdown">
                               <ul class="projets terminés">
                                     <li><a href="#projet1">Projet 1</a></li>
                                     <li><a href="#projet2">Projet 2</a></li>
                                     <li><a href="#projet3">Projet 3</a></li>
                                </ul>
                                </div>
                             </li>
                             <li><a href="#projet_enc">projets en cours</a>
                             <div class="dropdown">
                                  <ul class="projets en cours">
                                      <li><a href="#projet4">Projet 1</a></li>
                                      <li><a href="#projet5">Projet 2</a></li>
                                      <li><a href="#projet6">Projet 3</a></li>
                                  </ul>
                             </div>
                             </li>
                       </ul>
                     </div>    
                </li>
                <li><a href="#suivi">Suivi</a>
                    <div class="dropdown">
                        <ul class="suivi">
                            <li><a href="{{ route("suivi") }}">Plan_Visé</a></li>
                            <li><a href="{{ route("immatriculation") }}">Procéduire d'imatriculation et de muation</a></li>
                            <li><a href="#suivi3">Lévé et lotissement</a></li>
                         </ul>
                    </div>
                </li>

                <li><a href="#team">Équipe</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        
    </header>
<main>

    <section id="accueil" class="accueil">
        <!--<h1>Accueil</h1>-->
        <div class="hero">
            <h1><span>B</span>ienvenue au <span>C</span>entre <span>M</span>oderne de <br><span>T</span>ravaux<span>T</span>opographiques et d'<span>É</span>tudes <br><span>F</span>oncières</h1>
            <p>Des solutions modernes et fiables pour vos besoins en topographie et études foncières.</p>
            <a href="#services" class="cta">Découvrez nos services</a>
            <a href="#projets" class="cta">Découvrez nos Projets</a>
            <a href="#suivi" class="cta">Suivez votre dosier</a>
            <a href="#team" class="cta">Découvrez notre équipe</a>
            <a href="#contact" class="cta">Contactez-nous</a>

        </div>
    </section>

    <section id="projets" class="projet">
        <h2>Projets terminés</h2>
        <section id="projets_ter">
            <div class="project-cards">
                <div class="card">
                    <h3>Projet 1</h3>
                    <p>Description du projet 1.</p>
                </div>
                <div class="card">
                    <h3>Projet 2</h3>
                    <p>Description du projet 2.</p>
                </div>
                <div class="card">
                    <h3>Projet 3</h3>
                    <p>Description du projet 3.</p>
                </div>
            </div>
        </section>
        <h2>Projets en cours</h2>
        <section id="projets_enc">
            <div class="project-cards">
                <div class="card">
                    <h3>Projet 1</h3>
                    <p>Description du projet 1.</p>
                </div>
                <div class="card">
                    <h3>Projet 2</h3>
                    <p>Description du projet 2.</p>
                </div>
                <div class="card">
                    <h3>Projet 3</h3>
                    <p>Description du projet 3.</p>
                </div>
            </div>
        
        </div>
        </section>
        <section id="services" class="services">
            <h2>Nos Services</h2>
            <div class="service-cards">
                <div class="card">
                    <h3>Travaux Topographiques</h3>
                    <p>Levés topographiques, implantations, calculs et plans détaillés.</p>
                </div>
                <div class="card">
                    <h3>Études Foncières</h3>
                    <p>Évaluation foncière, bornage, gestion des titres fonciers.</p>
                </div>
                <div class="card">
                    <h3>Consultations et Conseils</h3>
                    <p>Accompagnement et expertise pour vos projets immobiliers et fonciers.</p>
                </div>
            </div>
        </section>
        <section id="suivi" class="suivi">
            <h2>Renseignez-vous sur l'avancement de vos dossiers</h2>
            <div class="suivi-cards">
                <div class="card">
                    <h3>Plans-Visés</h3>
                    <p>Description du suivi 1.</p>
                </div>
                <div class="card">
                    <h3>Procéduires d'immatriculations</h3>
                    <p>Description du suivi 2.</p>
                </div>
                <div class="card">
                    <h3>Expertises et Conseils Techniques</h3>
                    <p>Description du suivi 3.</p>
                </div>

        </section>
    
        <section id="about" class="about">
            <h2>À Propos</h2>
            <p>Le CMTTEF est une organisation dédiée à fournir des services professionnels et modernes dans les domaines de la topographie et des études foncières. <br> 
                Avec une équipe qualifiée et des outils de pointe, nous garantissons des résultats précis et fiables.</p>
        </section>
    
        <section id="team" class="team">
            <h2>Notre Équipe</h2>
            <div class="team-members">
                <div class="member">
                    <h3>TCHANDKOU Manoba </h3>
                    <p>Ingénieur des Travaux <br>Dévéloppeur d'appliction Web et Mobile</p>
                </div>
                <div class="member">
                    <h3>ATTIGAN Kokou Mawuko</h3>
                    <p>Expert-Géomètre <br>Opérateur Topographe Agréé</p>
                </div>
                <div class="member">
                    <h3>KOUMA Féiibéd</h3>
                    <p>Consultant Technique</p>
                </div>
            </div>
        </section>
    
        <section id="contact" class="contact">
            <h2>Contactez-nous</h2>
            <form action="#" method="post">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" required>
    
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
    
                <label for="message">Message :</label>
                <textarea id="message" name="message" rows="5" required></textarea>
    
                <button type="submit">Envoyer</button>
            </form>
        </section>
</main>

    <footer>
        <p>&copy; 2025 Centre Moderne de Travaux Topographiques et d'Études Foncières. Tous droits réservés.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>