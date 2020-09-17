<?php $title = "Conception Web Thomas ORTA"; ?>

<?php ob_start(); ?>

<section id="slider">
    <div class="slide">
        <div class="slideTitle">
            <h2>Developpeur Web</h2>
        </div>
        <img src="images/computerCodeOne" alt="ecran coder">
    </div>
    <div class="slide">
        <div class="slideTitle">
            <h2>Hébergement Web</h2>
        </div>
        <img src="images/computerCodeTwo" alt="ecran coder">
    </div>
</section>
<section id="myServices">
    <h2>Mes services</h2>
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

<script src="js/slider.js"></script>
<script src="js/main.js"></script>

<?php 
    $content = ob_get_clean(); 
    
    require_once("template.php"); 
?>