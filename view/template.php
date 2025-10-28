<?php
$baseUrl = ($_SERVER['HTTP_HOST'] === 'localhost')
  ? '/websites/ThomasOrta/public'
  : '';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Thomas Orta - Développeur web freelance. Création de sites modernes et performants.">
    <meta name="author" content="Thomas Orta">
    <title><?= htmlspecialchars($title ?? 'Thomas Orta - Développeur web freelance'); ?></title>

    <!-- Feuilles de style -->
    <link rel="stylesheet" href="<?= $baseUrl ?>/css/style.css">
    <link rel="stylesheet" href="<?= $baseUrl ?>/css/modern.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/67cbdf618e.js" crossorigin="anonymous"></script>

    <!-- Dark mode automatique -->
    <script>
        // Applique une classe .dark si le navigateur est en mode sombre
        if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.documentElement.classList.add('dark');
        }
    </script>

    <!-- Animation gradient (pour le HERO) -->
    <style>
        @keyframes gradientMove {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .hero-gradient {
            background: linear-gradient(270deg, #2563eb, #7c3aed, #ec4899, #f97316);
            background-size: 800% 800%;
            animation: gradientMove 20s ease infinite;
        }
    </style>
</head>

<body>

<header style="background:linear-gradient(45deg,#000,#333,#000); color:white; padding:10px 0; position:sticky; top:0; z-index:1000; width:100%;">

    <?php    
        // Si le cookie n'est pas encore accepté, on affiche la bannière + on inclut le menu
        if (!isset($_COOKIE['acceptCookie'])) {
            $showCookie = true;
        } else { 
            $showCookie = false;
        }

        // On inclut toujours le menu (que le cookie soit accepté ou non)
        require_once('../view/menu.php');
    ?>

    <?php if ($showCookie): ?>
        <div class="cookieAlert" style="background:#111; color:#fff; text-align:center; padding:10px; border-top:2px solid red;">
            <p style="margin:0;">
                En poursuivant votre navigation sur ce site, vous acceptez l'utilisation de cookies pour vous proposer des contenus adaptés. 
            </p>
            <input id="cookieButton" type="button" value="OK" 
                   style="margin-top:8px; padding:5px 15px; border:none; border-radius:5px; background:#f59e0b; color:#111; cursor:pointer;"
                   onclick="window.location.href='index.php?objet=cookie';" />
        </div>
    <?php endif; ?>
</header>



<main>
    <?= $content ?>
</main>

<footer style="background:black; color:white; text-align:center; padding:20px 10px; margin-top:0px;">
    <p>&copy; <?= date('Y'); ?> Thomas Orta — Tous droits réservés.</p>
    <p>
        <a href="/mentions-legales" style="color:orange; text-decoration:none;">Mentions légales</a>
    </p>
</footer>

<script src="<?= $baseUrl ?>/js/slider.js?v=1"></script>
<script src="<?= $baseUrl ?>/js/forecast.js?v=1"></script>

</body>

</html>
