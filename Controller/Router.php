<?php

namespace Controller;

class Router
{   
    public function requete()
    {
        try {   
            // DETERMINE L'ACTION DE L'UTILISATEUR 
            if (isset($_GET['objet'])) {
                //ROUTES
                if ($_GET['objet'] === 'post') {
                    
                
                //REDIRECTION SUR L'INDEX.PHP
                } elseif (isset($_GET['objet']) && ($_GET['objet'] === 'home')) {

                    header ("Location: index.php");
                }
                //REDIRECTION SUR LA PAGE SHOWCASE
                elseif (isset($_GET['objet']) && ($_GET['objet'] === 'showcase')) {
                    $postShowcaseController = new PostShowcaseController();
                    $postShowcaseController->displayPosts();
                }
                //REDIRECTION SUR LA PAGE INTEGRATOR WEB
                elseif (isset($_GET['objet']) && ($_GET['objet'] === 'integrator')) {
                    $postIntegratorController = new PostIntegratorController();
                    $postIntegratorController->displayPosts();
                }
                //REDIRECTION SUR LA PAGE BLOG
                elseif (isset($_GET['objet']) && ($_GET['objet'] === 'blog')) {
                    $postBlogController = new PostBlogController();
                    $postBlogController->displayPosts();
                }
                //REDIRECTION SUR LA PAGE WORDPRESS
                elseif (isset($_GET['objet']) && ($_GET['objet'] === 'wordPress')) {
                    $postWordPressController = new PostWordPressController();
                    $postWordPressController->displayPosts();
                }
            //SI L'UTILISATEUR FAIT RIEN "PAGE D'ACCUEIL"
            } else {
                $homeController = new HomeController();
                $homeController->displayhome();
            }
        //GESTION DES ERREURS
        } catch(Exception $e) {
            $errorMsg = $e->getMessage();

            require_once('../views/viewError.php');
        }
    }
} 