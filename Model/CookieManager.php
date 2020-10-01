<?php

namespace Model;

use Controller\CookieController;

class CookieManager
{
    public function acceptCookie() 
    {
        setcookie('acceptCookie', true, time() + 365*24*3600, '/', null, false, true);
    }
}