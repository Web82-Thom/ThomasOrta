<?php

namespace Controller;

use Model\CookieManager;

class CookieController
{
    public function acceptCookie()
    {
        $cookieManager = new CookieManager();
        $cookieManager->acceptCookie();
        
        header('Location: index.php?objet=home');
    }
}
