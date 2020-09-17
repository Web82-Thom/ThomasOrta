<nav id="menu">
    <div id="thomasOrta">
        <h1><a class="link" href="index.php?objet=home">Thomas ORTA</a></h1>
        <strong>Freelance</strong>
    </div>
    <nav id="menuNavigation">
        <ul>
            <li>
                <a class="link" href="index.php?objet=home"><i class="fas fa-home"></i> Accueil</a>
            </li>
            <li>
                <a class="link" href="index.php?#myServices">Mes services</a> 
            </li>
            <li>
                <a class="link" href="index.php?#projects">Portfolio
            </li>
            <li>
                CV
            </li>
            <li>
                Contact
            </li>
            <li class="menuAdmin">
                <a href="index.php?objet=admin&amp;action=login">Admin</a>
                <ul class="sousMenu">
                    <li>
                        <a href="index.php?objet=admin&amp;action=destroy"><?php if (isset($_SESSION['firstAdmin'])) {echo 'Se déconnecter';} ?></a>
                    </li>
                    <li>
                        <a href="index.php?objet=admin&amp;action=login"><?php if (!isset($_SESSION['firstAdmin'])) {echo 'Se connecter';}?></a>
                    </li>
                </ul>
            </li>
        </ul>
</nav>
</nav>