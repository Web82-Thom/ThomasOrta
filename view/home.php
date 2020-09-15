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

<script src="js/slider.js"></script>
<script src="js/main.js"></script>

<?php 
    $content = ob_get_clean(); 
    
    require_once("template.php"); 
?>