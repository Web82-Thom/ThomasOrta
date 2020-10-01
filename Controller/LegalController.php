<?php

namespace Controller;

class LegalController
{ 
    function displayMentions()
    {
        require_once('../view/mentionsLegales.php');
    }  
    
    function displayCookie()
    {
        require_once('../view/mentionsCookies.php');
    }
}