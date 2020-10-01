<?php $title = "Conception Web Thomas ORTA"; ?>

<?php ob_start(); ?>

<section id="slider">
    <div class="slide">
        <div class="slideTitle">
            <h2>Developpeur Web</h2>
        </div>
        <img src="images/computercode.jpg" alt="ecran code">
    </div>
    <div class="slide">
        <div class="slideTitle">
            <h2>Objectifs et solutions</h2>
        </div>
        <img src="images/objectifsolutions.jpg" alt="srabble code">
    </div>
    <div class="slide">
        <div class="slideTitle">
            <h2>Hébergement Web</h2>
        </div>
        <img src="images/serveur.jpg" alt="SEO">
    </div>
</section>
<section id="forecast">
    <h2>Le petit coin météo...</h2>
    <div class="input">
        <input type="text" id="cityValue" placeholder="Entrez votre ville">
        <input type="submit" value="Rechercher" id="button">
    </div>
    <div class="displayWeather">
        <div id="imgWeather">
            <img id="icon" src="" alt="image du ciel">
        </div>
        <p id="nameCity"><p>
        <p id="description"></p>
        <p id="temperature"></p>
        <p id="temperatureMax"></p>
        <p id="temperatureMin"></p>
    </div>
</section>
<section id="mes-services">
    <h2>Mes services</h2>
    <p id="mission">
            Ma mission est bien plus que le développement de votre site internet, je suis là pour vous accompagner à la réussite de votre activité.
        </p>
    <article>
        <div class="service">
            <h3><a class='link' href="/le-site-vitrine">Site Vitrine</a></h3>
            <p>
                Ce type de site présente l'entreprise ou la marque et son activité. Il fait évolue votre connaissance et vos ventes.
            </p>
            <ul>
                <li>
                    Étude de votre projet / cahier des charges
                </li>
                <li>
                    HTML, CSS, Javascript
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
                    Responsifs smartphones/tablettes
                </li>
            </ul>
        </div>
        <div class="service">
            <h3><a class='link' href="/integrateur-web">Integration Web</a></h3>
            <p>
                Vous savez ce que vous voulez! À partir de vos maquettes, rédactions, et multimédias je mets votre projet en construction.
            </p>
            <ul>
                <li>
                    Étude de votre projet / cahier des charges
                </li>
                <li>
                    Si besoin création d'une base de donné (PHP, MySql) 
                </li>
                <li>
                    HTML, CSS, Javascript 
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
                    Responsifs smartphones/tablettes
                </li>
            </ul>
        </div>
        <div class="service">
            <h3><a class='link' href="/blog">Blog</a></h3>
            <p>
                Vous voulez partager vos connaissances, votre savoir-faire, publié un livre, booster vos contacts, c'est par ici! 
            </p>
            <ul>
                <li>
                    Étude de votre projet / cahier des charges 
                </li>
                <li>
                    Création d'une base de donné (PHP, MySql)
                </li>
                <li>
                    HTML, CSS, Javascript 
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
                    Responsifs smartphones/tablettes
                </li>
            </ul>
        </div>
        <div class="service">
            <h3><a class='link' href="/wordPress">WordPress</a></h3>
            <p>
                Un site clef en main, WordPress propose une multitude d'outil qui vous permet de maintenir votre site à jour. 
            </p>
            <ul>
                <li>
                    Étude de votre projet / cahier des charges 
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
                    Responsifs smartphones/tablettes
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
    <p id="infoProjects">
        Retrouvez tous mes projets créés : sites vitrine, office du tourisme...
    </p>
    <div id="portfolio">
        <figure>
            <img src="images/webAgency.jpg" alt="WebAgency" class="projet1">
            <figcaption>
                <i class="fas fa-check-double"></i>
                <h3><a href="http://webagency-thomas.com/" target="_blank">WebAgency</a></h3>
                <p>
                    Site vitrine pour une agence Web
                </p> 
            </figcaption>
        </figure>
        <figure>
            <img src="images/officeireki.jpg" alt="Office du tourisme d'Ireki" class="projet2">
            <figcaption>
                <i class="fas fa-check-double"></i>
                <h3>
                    <a href="http://office-ireki-projet-formation-thomas-orta.com/" target="_blank">
                        Office du tourisme d'Ireki
                    </a>
                </h3>
                <p>
                    Devélopper avec wordPress
                </p>
            </figcaption>
        </figure>
        <figure>
            <img src="images/velok31.jpg" alt="VéloK 31" class="projet3">
            <figcaption>
                <i class="fas fa-check-double"></i>
                <h3>
                    <a href="http://www.location-velo-toulouse.com/" target="_blank">
                        Vélok 31
                    </a>
                </h3>
                <p>
                    Application location de vélos sur Toulouse
                </p>
            </figcaption>
        </figure>
        <figure>
            <img src="images/jeanforteroche.jpg" alt="Blog pour un ecrivain" class="projet4">
            <figcaption>
                <i class="fas fa-check-double"></i>
                <h3>
                    <a href="http://www.jf-blog.com/" target="_blank">
                        publier un livre
                    </a>
                </h3>
                <p>
                    Blog pour un écrivain
                </p>
            </figcaption>
        </figure>
        <figure>
            <img src="images/thomasorta.jpg" alt="Thomas ORTA" class="projet5">
            <figcaption>
                <i class="fas fa-check-double"></i>
                <h3>
                    <a href="" target="_blank">
                        Developpeur Thomas ORTA
                    </a>
                </h3>
                <p>
                    Site vitrine Thomas ORTA
                </p>
            </figcaption>
        </figure>
    </div>
</section>
<section id="cVitae">
    <h2 id="titleCVitae">À propos de moi, mon Cv...</h2>
    <article id="myCv">
        <h2 class="titleCVitae">À propos de moi, mon Cv...</h2>
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
                        Pêche
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
                                <p class="school">OpenClassrooms.com</p>
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
                                <p class="enterprise">OpenClassrooms</p>
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
    <article id="downloadCv">
        <h3>Mon Cv en téléchargement</h3>
        <p>
            <a href="/doc/cvthomasorta.pdf" target="_blank">
                Télécharger mon Curiculum Vitaé au format pdf.
            </a>
        </p>  
    </article>
</section>
<section id="formContact">
    <h2 class="titleFormContact">Formulaire de contact</h2>
    <article class="form ">
		<div class="heddingTitle">
			<h3><a href="index.php?objet=contact">Contactez moi !</a></h3>
		</div>
		<div class="heddingDescription">
            <p>
                <a href="/formulaire-de-contact">
                    Ma mission est bien plus que le développement de votre site internet, je suis là pour vous accompagner à la réussite de votre activité. Contactez-moi par ce formulaire ou par téléphone.
                </a>
            </p>
            <p>
                Thomas ORTA : 06.12.14.92.55
            </p>
		</div>
		<div class="formInput">
            <form method="POST" action="index?objet=contact"><br>
                <label for="inputContactName">Votre nom :</label><br>
                <input id="inputContactName" type="text" placeholder="Entrez votre nom" name="name" /><br>
                <label for="inputContactFirstName">Votre Prénom :</label><br>
				<input id="inputContactFirstName" type="text" placeholder="Entrez votre prénom" name="firstName" /><br>
                <label for="inputContactTitle">Titre de votre méssage :</label><br>
                <input id="inputContactTitle" type="text" name="title" placeholder="Titre"><br>
                <label for="inputContactEmail"> Votre Em@il :</label><br>
				<input id="inputContactEmail" type="text" placeholder="Email..." name="email" maxlength="50" /><br>
                <label for="inputContactMessage">Votre méssage :</label>
                <textarea id="inputContactMessage" rows="4" placeholder="Méssage.." name="message" maxlength="150"></textarea>
                <input id="inputContactCheck" type="checkbox" value="0" name="acceptSend">
                <label for="inputContactCheck">En cochant cette case vous acceptez de me communiquer vos informations.</label>
				<button id="formButton" type="submit" name="mailForm" title="Envoyer" >Envoyez votre message</button>
			</form> 
		</div>
    </article>
</section>

<script src="js/slider.js"></script>
<script src="js/forecast.js"></script>
<script src="js/formContact.js"></script>
<script src="js/main.js"></script>

<?php 
    $content = ob_get_clean(); 
    
    require_once("template.php"); 
?>