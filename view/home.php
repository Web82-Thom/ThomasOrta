<?php $title = "Conception Web Thomas ORTA"; ?>

<?php ob_start(); ?>
<nav id="menu">
    <div id="thomasOrta">
        <h1>Thomas ORTA</h1>
        <strong>Freelance</stong>
    </div>
    <div id="menuNavigation">
        <ul>
            <li>
                <i class="fas fa-home"></i> Accueil
            </li>
            <li>
                Prestation
            </li>
            <li>
                Porfolio
            </li>
            <li>
                CV
            </li>
            <li>
                Contact
            </li>
        </ul>
    </div>
</nav>
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

<script src="js/slider.js"></script>
<script src="js/main.js"></script>

<?php 
    $content = ob_get_clean(); 
    
    require_once("template.php"); 
?>