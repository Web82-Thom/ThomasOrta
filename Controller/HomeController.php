<?php

namespace Controller;

use Model\ContactManager;

class HomeController
{
    public function displayHome()
    {
        // Soumission du formulaire
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['mailForm'])) {
            $contactManager = new ContactManager();
            $success = $contactManager->sendMail();

            if ($success) {
                header('Location: index.php?objet=home&success=1');
                exit;
            } else {
                header('Location: index.php?objet=home&error=1');
                exit;
            }
        }

        // Affiche la vue
        require_once('../view/home.php');
    }
}
