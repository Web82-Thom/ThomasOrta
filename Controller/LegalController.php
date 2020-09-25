<?php

namespace Controller;

class LegalController
{ 
    function displayMentions()
    {
        require_once('../view/legalNotice.php');
    }  
    
    function displayCookie()
    {
        require_once('../view/cookie.php');
    }
}