<?php $title = "Conception Web Thomas ORTA"; ?>

<?php ob_start(); ?>

<section id="slider">
    <div class="slide">
        <div class="slideTitle">
            <h2>Developpeur Web</h2>
        </div>
        <img src="images/computerCodeOne.jpg" alt="ecran coder">
    </div>
    <div class="slide">
        <div class="slideTitle">
            <h2>Hébergement Web</h2>
        </div>
        <img src="images/serveur.jpg" alt="ecran coder">
    </div>
    <div class="slide">
        <div class="slideTitle">
            <h2>Objectifs et solutions</h2>
        </div>
        <img src="images/objectif.jpg" alt="ecran coder">
    </div>
</section>


<section id="forecast">
    <h2>Le petit coin météo...</h2>
    <div class="input">
        <input for="button"type="text" id="cityValue" placeholder="Entrez votre ville">
        <input type="submit" value="Rechercher" id="button">
    </div>
    <div class="displayWeather">
        <div id="imgWeather">
            <img id="icon" src="" alt="">
        </div>
        <h4 id="nameCity">Ville :</h1>
        <p id="description">Description :</p>
        <p id="temperature">Température :</p>
    </div>
</section>


<section id="myServices">
    <h2>Mes services</h2>
    <p id="mission">
            Ma mission est bien plus que le developpement de votre site internet, je suis là pour vous accompagner à la reussite de votre activitée.
        </p>
    <article>
        <div class="service">
            <h3><a class='link' href="index.php?objet=showcase">Site Vitrine</a></h3>
            <p>
                Ce type de site présente l'entrepise ou la marque et son activité. Il fait évolue votre connaissance et vos ventes.
            </p>
            <ul>
                <li>
                    Étude de votre projet / Cahier des charges
                </li>
                <li>
                    Html, CSS, JavaScript
                </li>
                <li>
                    Validation W3C
                </li>
                <li>
                    Hébergement
                </li>
                <li>
                    Référencement Naturel
                </li>
                <li>
                    Responsive smartphones/tablettes
                </li>
            </ul>
        </div>
        <hr>
        <div class="service">
            <h3><a class='link' href="index.php?objet=integrator">Integration Web</a></h3>
            <p>
                Vous savez ce que vous voulez! A partir de vos maquettes, rédactions, et mutimédias je met votre projet en construction.
            </p>
            <ul>
                <li>
                    Étude de votre projet / Cahier des charges
                </li>
                <li>
                    Si besoin création d'une base de donné (PHP, MySql) 
                </li>
                <li>
                    Html, CSS, JavaScript 
                </li>
                <li>
                    Validation W3C
                </li>
                <li>
                    Hébergement
                </li>
                <li>
                    Référencement Naturel
                </li>
                <li>
                    Responsive smartphones/tablettes
                </li>
            </ul>
        </div>
        <hr>
        <div class="service">
            <h3><a class='link' href="index.php?objet=blog">Blog</a></h3>
            <p>
                Vous voulez partager vos connaissances, votre savoir-faire, publié un livre, booster vos contacts, c'est par ici! 
            </p>
            <ul>
                <li>
                    Étude de votre projet / Cahier des charges 
                </li>
                <li>
                    Création d'une base de donné (PHP, MySql)
                </li>
                <li>
                    Html, CSS, JavaScript 
                </li>
                <li>
                    Validation W3C
                </li>
                <li>
                    Hébergement
                </li>
                <li>
                    Référencement Naturel
                </li>
                <li>
                    Responsive smartphones/tablettes
                </li>
            </ul>
        </div>
        <hr>
        <div class="service">
            <h3><a class='link' href="index.php?objet=wordPress">WordPress</a></h3>
            <p>
                Un site clef en main, WordPress propose une multitude d'outil qui vous permet de maintenir votre site à jour. 
            </p>
            <ul>
                <li>
                    Étude de votre projet / Cahier des charges 
                </li>
                <li>
                    Validation W3C
                </li>
                <li>
                    Hébergement
                </li>
                <li>
                    Référencement Naturel
                </li>
                <li>
                    Responsive smartphones/tablettes
                </li>
            </ul>
        </div>
    </article>
    <p id="infoServices">
        L'étude de votre projet permettra de fixer un budget personnel
    </p>
</section>
<section id="projects">
    <h2>Mes réalisations</h2>
    <p id="infoProjects">Retrouvez tous mes projets créés : sites vitrine, office de tourisme...</p>
    <div id="portfolio">
        <figure>
            <img src="images/webAgency.jpg" alt="WebAgency" class="projet1">
            <figcaption>
                <i class="fas fa-check-double"></i>
                <h3><a href="http://webagency-thomas.com/">WebAgency</a></h3>
                <p>Site vitrine pour une agence Web</p> 
            </figcaption>
        </figure>
        <figure>
            <img src="images/officeIreki.jpg" alt="Office du tourisme d'Ireki" class="projet2">
            <figcaption>
                <i class="fas fa-check-double"></i>
                <h3><a href="http://office-ireki-projet-formation-thomas-orta.com/">Office du tourisme d'Ireki</a></h3>
                <p>Devélopper avec wordPress</p>
            </figcaption>
        </figure>
        <figure>
            <img src="images/velok31.jpg" alt="VéloK 31" class="projet3">
            <figcaption>
                <i class="fas fa-check-double"></i>
                <h3><a href="http://www.location-velo-toulouse.com/">Vélok 31</a></h3>
                <p>Application Location de vélos sur Toulouse</p>
            </figcaption>
        </figure>
        <figure>
            <img src="images/jeanForteroche.jpg" alt="Blog pour un ecrivain" class="projet4">
            <figcaption>
                <i class="fas fa-check-double"></i>
                <h3><a href="http://www.jf-blog.com/">publier un livre</a></h3>
                <p>Blog pour un écrivain</p>
            </figcaption>
        </figure>
        <figure>
            <img src="images/thomasOrta.jpg" alt="Thomas ORTA" class="projet5">
            <figcaption>
                <i class="fas fa-check-double"></i>
                <h3><a href=""></a>Developpeur Thomas ORTA</h3>
                <p>Site vitrine Thomas ORTA</p>
            </figcaption>
        </figure>
    </div>
</section>
<section id="cVitae">
    <h2 id="titleCVitae">À propos de moi, mon Cv...</h2>
    <article id="myCv">
        <article id="infosMyCv">
            <div id="myPicture">
                <img src="images/identite.jpg" alt="Thomas ORTA">
            </div>
            <div id="myProfile">
                <h4>PROFIL</h4>
                <ul id="profile">
                    <li>
                        38 ans, marié, 1 enfant
                    </li>
                    <li>
                        Adresse : 31510 route de Genebrières 82 230 LEOJAC
                    </li>
                    <li>
                        Tel : 06 . 12 .14 .92 .55
                    </li>
                    <li>
                        E-m@il : thom.orta@gmail.com	
                    </li>
                    <li>
                        SiteWeb : <a href="index.php?objet=home">https://www.thomas-orta.com</a>
                    <li>
                        Véhicule et Permis B, C, EB, EC
                    </li>
                </ul>
            </div>
            <hr class="separatorCvInfos">
            <div id="myLog">
                <h4>Logiciel</h4>
                <ul id="log">
                    <li>
                        GitBash / GitHub
                    </li>
                    <li>
                        Sublime Text
                    </li>
                    <li>
                        Visual Studio Code
                    </li>
                    <li>
                        FilleZilla	
                    </li>
                    <li>
                        PhpMyAdmin
                    <li>
                        Wamp64
                    </li>
                    <li>
                        Outils Web Developper
                    </li>
                    <li>
                        Office
                    </li>
                </ul>
            </div>
            <hr class="separatorCvInfos">
            <div id="myLanguage">
                <h4>Langues</h4>
                <ul id="language">
                    <li>
                        Anglais : Moyen
                    </li>
                    <li>
                        Français : Langue maternelle
                    </li>
                </ul>
            </div>
            <hr class="separatorCvInfos">
            <div id="myInterest">
                <h4>Intérêts</h4>
                <ul id="interest">
                    <li>
                        peche
                    </li>
                    <li>
                        Nature
                    </li>
                    <li>
                        Informatique
                    </li>
                    <li>
                        Famille
                    </li>
                </ul>
            </div>
        </article>
        <article id=tables>
            <div id=training>
                <div id="banner">
                    <h2 id="titleBanner">Thomas ORTA</h2>
                    <p>
                        Freelance / Developper Back-End et Front-End
                    </p>
                </div>
                <table class="tableTraining">
                    <caption>Formations</caption>
                    <tbody>
                        <tr class="trCv">
                            <td class="yearCity">
                                <p class="year">2019 - 2020</p>
                                <p class="city">Léojac</p> 
                            </td>
                            <td class="experienceCv">
                                <p class="diploma">Diplôme Developpeur Web Junior en cours d'aquisition</p>
                                <p class="school">OpenClassroom.com</p>
                            </td>
                        </tr>
                        <tr class="trCv">
                            <td class="yearCity">
                                <p class="year">2006 - 2007</p>
                                <p class="city">Montauban</p> 
                            </td>
                            <td class="experienceCv">
                                <p class="diploma">Diplôme Professionnel de Route FIMO-PL-SPL-CACES</p>
                                <p class="school">ECF</p>
                            </td>
                        </tr>
                        <tr class="trCv">
                            <td class="yearCity">
                                <p class="year">2003</p>
                                <p class="city">Toulouse</p> 
                            </td>
                            <td class="experienceCv">
                                <p class="diploma">Diplôme BTS Prod Méca Option Usinage</p>
                                <p class="school">CFAI Midi-Pyrénné</p>
                            </td>
                        </tr>
                        <tr class="trCv">
                            <td class="yearCity">
                                <p class="year">2001 - 2003</p>
                                <p class="city">Toulouse</p> 
                            </td>
                            <td class="experienceCv">
                                <p class="diploma">Diplôme BAC Prod Méca Option Usinage</p>
                                <p class="school">CFAI Midi-Pyrénné</p>
                            </td>
                        </tr>
                        <tr class="trCv">
                            <td class="yearCity">
                                <p class="year">1999 - 2001</p>
                                <p class="city">Montauban</p> 
                            </td>
                            <td class="experienceCv">
                                <p class="diploma">Diplôme BEP Prod Méca Option Usinage</p>
                                <p class="school">Lycée Antoine Bourdelle</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <hr class="separatorCvTable">
            <div id="experience">
                <table class="tableExperience">
                    <caption>Expériences proféssionnelles</caption>
                    <tbody>
                        <tr class="trCv">
                            <td class="yearCity">
                                <p class="year">2020</p>
                                <p class="city">Léojac</p> 
                            </td>
                            <td class="experienceCv">
                                <p class="enterprise">Freelance</p>
                                <p class="function">Développeur de site Web</p>
                                <ul>
                                    <li>Etude de votre projet</li>
                                    <li>Cahiers des charges</li>
                                    <li>Langages HTML, CSS, JavaScript, PHP, SQL, CMS</li>
                                    <li>site Vitrine</li>
                                    <li>site blog</li>
                                    <li>site sur mesure</li>
                                    <li>...tous les nouveaux projets</li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="trCv">
                            <td class="yearCity">
                                <p class="year">2018 - 2020</p>
                                <p class="city">Léojac</p> 
                            </td>
                            <td class="experienceCv">
                                <p class="enterprise">OpenClassroom</p>
                                <p class="function">Formation en ligne Développeur Web Junior</p>
                                <ul>
                                    <li>Réalisation de 5 projets</li>
                                    <li>Langages HTML, CSS, JavaScript, PHP, SQL, CMS</li>
                                    <li>Étude de marché / Business Model Canvas</li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="trCv">
                            <td class="yearCity">
                                <p class="year">2007 - 20018</p>
                                <p class="city">Bressols</p> 
                            </td>
                            <td class="experienceCv">
                                <p class="enterprise">Bergo fruits / Satar</p>
                                <p class="function">Chauffeur SPL National</p>
                                <ul>
                                    <li>Chargement / Déchargement</li>
                                    <li>Conduite National</li>
                                    <li>Entretien du véhicule</li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="trCv">
                            <td class="yearCity">
                                <p class="year">2004 - 2006</p>
                                <p class="city">Montauban</p> 
                            </td>
                            <td class="experienceCv">
                                <p class="enterprise">Farella</p>
                                <p class="function">Ouvrier qualifié</p>
                                <ul>
                                    <li>Réalisation de pièces usinées</li>
                                    <li>Contrôles</li>
                                    <li>Ajustages</li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="trCv">
                            <td class="yearCity">
                                <p class="year">2003 - 2004</p>
                                <p class="city">Midi-Pyrénées</p> 
                            </td>
                            <td class="experienceCv">
                                <p class="enterprise">Confort Général Européen,</p>
                                <p class="function">Commercial</p>
                                <ul>
                                    <li>prise de contact</li>
                                    <li>démonstration et vente d'affineur d'eau</li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="trCv">
                            <td class="yearCity">
                                <p class="year">1999 - 2003</p>
                                <p class="city">Cugnaux</p> 
                            </td>
                            <td class="experienceCv">
                                <p class="enterprise">Dedienne Industrie,</p>
                                <p class="role">Apprenti pour le BAC et le BTS</p>
                                <ul>
                                    <li>Usinages conventionnel et numérique</li>
                                    <li>Ajustage</li>
                                    <li>Programation numérique</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>    
            </div>
        </article>
    </article>
</section>
<section id="formContact">
    <h2 class="titleFormContact">Formulaire de contact</h2>
    <div class="form ">
		<div class="hedding-title">
			<h1><a href="index.php?objet=contact">Contactez moi !</a></h1>
		</div>
		<div class="hedding-description">
            <p>
                <a href="index.php?objet=contact">
                    Ma mission est bien plus que le developpement de votre site internet, je suis là pour vous accompagner à la reussite de votre activitée. Contactez moi par ce formulaire ou par téléphone.
                </a>
            </p>
            <p>
                Thomas ORTA : 06.12.14.92.55
            </p>
		</div>
		<div class="form-input">
            <form method="POST" action="index?objet=contact">
                <label for="name">Votre nom :</label><br>
                <input type="text" placeholder="Entrez votre nom" name="name"><br>
                
                <label for="firstName">Votre Prenom :</label><br>
				<input type="text" placeholder="Entrez votre prénom" name="firstName"><br>
                
                <label for="title">Titre de votre message :</label>
                <input type="text" name="title" placeholder="Titre"><br>

                <label for="email"> Votre Em@il :</label><br>
				<input type="text" placeholder="Email..." name='email'></br>
                
                <label for="message">Votre message :</label>
				<textarea rows="4" placeholder="Message.." name="message"></textarea>
				<button class="button">Send Message</button>
			</form> 
		</div>
	</div>
</section>

<script src="js/slider.js"></script>
<script src="js/forecast.js"></script>
<script src="js/main.js"></script>

<?php 
    $content = ob_get_clean(); 
    
    require_once("template.php"); 
?>