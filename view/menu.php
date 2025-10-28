<header style="background:linear-gradient(45deg,#000,#444,#000); color:white; padding:10px 0; position:sticky; top:0; z-index:1000; width:100%;">
    <?php    
        // Gestion du cookie banner
        if (isset($_COOKIE['acceptCookie'])) {
            $showCookie = false;
        } else { 
            $showCookie = true;
            require_once('../view/menu.php');
        }
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

    <div id="thomasOrta" style="text-align:center; margin:10px 0;">
        <h1 style="margin:0; font-size:2rem;">
            <a class="link" href="index.php?objet=home" style="color:white; text-decoration:none;">Thomas ORTA</a>
        </h1>
        <p style="margin:5px 0; font-size:1rem;">📞 06.12.14.92.55 — <strong>Freelance</strong></p>
    </div>

    <nav id="menu" style="display:flex; justify-content:center; align-items:center; flex-wrap:wrap; background:rgba(0,0,0,0.6); border-top:1px solid #444;">
        <ul class="menuNavigation" style="list-style:none; display:flex; flex-wrap:wrap; margin:0; padding:0; gap:20px;">
            <li><a class="link" href="/accueil" style="color:white; text-decoration:none;">🏠 Accueil</a></li>
            <li><a class="link" href="/accueil#mes-services" style="color:white; text-decoration:none;">💼 Services</a></li>
            <li><a class="link" href="/accueil#projects" style="color:white; text-decoration:none;">📂 Portfolio</a></li>
            <li><a class="link" href="/accueil#formContact" style="color:white; text-decoration:none;">📩 Contact</a></li>
            <li>
                <a class="link" href="/login" style="color:white; text-decoration:none;">🔑 
                    <?php if (isset($_SESSION['firstAdmin'])) {echo 'Admin (Déconnexion)';} else {echo 'Admin (Connexion)';} ?>
                </a>
            </li>
        </ul>
    </nav>
</header>
