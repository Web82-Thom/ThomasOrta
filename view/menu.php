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
            </p>
            <input  id="cookieButton" type="button" value="ok" onclick="window.location.href='index.php?objet=cookie';" />
        </div>
    <?php } ?>
    
    <div id="thomasOrta">
        <h1><strong><a class="link" href="index.php?objet=home">Thomas ORTA</a></strong></h1>
        <p>
            <strong>tel: 06.12.14.92.55</strong>
        </p>
        <p>
            <strong>Freelance</strong>
        </p>
    </div>
    <nav id="littleMenu">
        <p><i class="fas fa-bars"></i> Menu</p> 
        <ul class="menuNavigation">
            <li class="listMenu">
                <a class="link" href="/accueil"><i class="fas fa-home"></i> Accueil</a>
            </li>
            <li class="listMenu">
                <a class="link" href="/accueil#mes-services">Mes services</a> 
            </li>
            <li class="listMenu">
                <a class="link" href="/accueil#projects">Portfolio</a>
            </li>
            <li class="listMenu">
                <a class="link" href="/accueil#cVitae">CV</a>
            </li>
            <li class="listMenu">
                <a class="link" href="/accueil#formContact">Contact</a> 
            </li>
            <li class="menuAdmin">
                <a href="/login">Admin</a>
                <ul class="sousMenu">
                    <li>
                        <a href="/deconnecter">
                            <?php if (isset($_SESSION['firstAdmin'])) {echo 'Se déconnecter';} ?>
                        </a>
                    </li>
                    <li>
                        <a href="/login">
                            <?php if (!isset($_SESSION['firstAdmin'])) {echo 'Se connecter';}?>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <nav id="menu">
        <ul class="menuNavigation">
            <li class="listMenu">
                <a class="link" href="/accueil"><i class="fas fa-home"></i> Accueil</a>
            </li>
            <li class="listMenu">
                <a class="link" href="/accueil#mes-services">Mes services</a> 
            </li>
            <li class="listMenu">
                <a class="link" href="/accueil#projects">Portfolio</a>
            </li>
            <li class="listMenu">
                <a class="link" href="/accueil#cVitae">CV</a>
            </li>
            <li class="listMenu">
                <a class="link" href="/accueil#formContact">Contact</a> 
            </li>
            <li class="menuAdmin">
                <a href="/login">Admin</a>
                <ul class="sousMenu">
                    <li>
                        <a href="/deconnecter">
                            <?php if (isset($_SESSION['firstAdmin'])) {echo 'Se déconnecter';} ?>
                        </a>
                    </li>
                    <li>
                        <a href="/login">
                            <?php if (!isset($_SESSION['firstAdmin'])) {echo 'Se connecter';}?>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</header>