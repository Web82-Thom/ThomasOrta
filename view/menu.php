<header>
    
    <?php    
        if (isset($_COOKIE['acceptCookie'])) {
                $showCookie = false;
            } else { 
                $showCookie = true;
            
                require_once('../view/menu.php');
            }
    ?>

    <?php if ($showCookie) { ?>
        <div class="cookieAlert">
            <p>
                En poursuivant votre navigation sur ce site, vous acceptez l'utilisation de cookie, stocker sur votre ordinateur, pour vous proposer des contenues et services adaptés à vos besoins. 
            </p></br>
            <button id="cookieButton" type="submit" value ="cookie">
                <a href="acceptCookie.php">ok</a>
            </button>
        </div>
    <?php } ?>
    
    <div id="thomasOrta">
        <h1><a class="link" href="index.php?objet=home">Thomas ORTA</a></h1>
        <strong>Freelance</strong>
    </div>
    <nav id="menu">
        <ul id="menuNavigation">
            <li class="listMenu">
                <a class="link" href="index.php?objet=home"><i class="fas fa-home"></i> Accueil</a>
            </li>
            <li class="listMenu">
                <a class="link" href="index.php?#myServices">Mes services</a> 
            </li>
            <li class="listMenu">
                <a class="link" href="index.php?#projects">Portfolio</a>
            </li >
            <li class="listMenu">
                <a class="link" href="index.php?#cVitae">CV</a>
            </li>
            <li class="listMenu">
                <a class="link" href="index.php?#formContact">Contact</a> 
            </li>
            <li id="menuAdmin">
                <a href="index.php?objet=admin&amp;action=login">Admin</a>
                <ul class="sousMenu">
                    <li>
                        <a href="index.php?objet=admin&amp;action=destroy">
                            <?php if (isset($_SESSION['firstAdmin'])) {echo 'Se déconnecter';} ?>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?objet=admin&amp;action=login">
                            <?php if (!isset($_SESSION['firstAdmin'])) {echo 'Se connecter';}?>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <nav id="littleMenu">
        <p><i class="fas fa-bars"></i> Menu</p> 
        <ul id="menuNavigation">
            <li class="listMenu">
                <a class="link" href="index.php?objet=home"><i class="fas fa-home"></i> Accueil</a>
            </li>
            <li class="listMenu">
                <a class="link" href="index.php?#myServices">Mes services</a> 
            </li>
            <li class="listMenu">
                <a class="link" href="index.php?#projects">Portfolio</a>
            </li >
            <li class="listMenu">
                <a class="link" href="index.php?#cVitae">CV</a>
            </li>
            <li class="listMenu">
                <a class="link" href="index.php?#formContact">Contact</a> 
            </li>
            <li id="menuAdmin">
                <a href="index.php?objet=admin&amp;action=login">Admin</a>
                <ul class="sousMenu">
                    <li>
                        <a href="index.php?objet=admin&amp;action=destroy">
                            <?php if (isset($_SESSION['firstAdmin'])) {echo 'Se déconnecter';} ?>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?objet=admin&amp;action=login">
                            <?php if (!isset($_SESSION['firstAdmin'])) {echo 'Se connecter';}?>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</header>