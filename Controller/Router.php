<?php

namespace Controller;

class Router
{   
    public function requete()
    {
        $options = [
            'id'=> FILTER_VALIDATE_INT,
            'objet'=> FILTER_SANITIZE_STRING,
            'action'=> FILTER_SANITIZE_STRING,
        ];
        $getClean = filter_var_array($_GET, $options);
        $postClean = filter_var_array($_POST);
        try {   
            // DETERMINE L'ACTION DE L'UTILISATEUR 
            if (isset($getClean['objet'])) {
                $postController = new PostController();
                //ROUTES
                if ($getClean['objet'] === 'post')  {
                    if (isset($getClean['action'])) {
                        $commentController = new CommentController();
                        // AJOUT D'UN POST
                        if ($getClean['action'] === 'add') {
                            $postController->add($postClean);
                        // AFFICHAGE AVANT MODIF D'UN POST
                        } elseif ($getClean['action'] === 'update' && isset($getClean['id'])) { 
                            $postController->update($getClean['id'], $postClean);
                        // AFFICHAGE AVANT SUPPRESSION 
                        } elseif ($getClean['action'] === 'delete' && isset($getClean['id'])) { 
                            $postController->delete($getClean['id'], $postClean);
                        // AJOUT DE COMMENTAIRE
                        } elseif ($getClean['action'] === 'addComment' && isset($getClean['id'])) {
                            $commentController->add($getClean['id'], $postClean['author'], $postClean['comment'], $postClean);
                        // AFFICHAGE AVANT MODIFICATION D'UN COMMENTAIRE*/
                        } elseif ($getClean['action'] === 'updateComment' && isset($getClean['id'])) {
                            $commentController->update($getClean['id'], $_GET['postId'], $postClean);
                        // AFFICHAGE AVANT SUPPRESSION D'UN COMMENTAIRE
                        } elseif ($getClean['action'] === 'deleteComment' && isset($getClean['id'])) {
                            $commentController->delete($getClean['id'], $postClean);
                        // SIGNALEMENT D'UN COMMENTAIRE
                        } elseif ($getClean['action'] === 'reportComment' && isset($getClean['id'])) {
                            $commentController->report($getClean['id'], $_GET['postId']);
                        // ENLEVER LE SIGNALEMENT D'UN COMMENTAIRE
                        } elseif ($getClean['action'] === 'unReportComment' && isset($getClean['id'])) {
                            $commentController->unReport($getClean['id']);
                        }
                    //AFFICHAGE D'1 POST ET SES COMMENTAIRES
                    } elseif (isset($getClean['id'])) {
                        $postController->display($getClean['id']);
                    // AFFICHAGE DE TOUS LES POST
                    } else {
                        $postController->displayPosts();
                    }
                // VALIDATION COOKIE
                } elseif ($getClean['objet'] === 'cookie') {
                    $cookieController = new CookieController();
                    $cookieController->acceptCookie();
                
                //REDIRECTION SUR L'ADMIN
                } elseif ($getClean['objet'] === 'admin') {
                    $adminController = new AdminController();
                    if (isset($getClean['action'], $postClean)) {
                        if ($getClean['action'] === 'login') {
                            $adminController->login();
                        } elseif ($getClean['action'] === 'destroy') { 
                            $adminController->destroy();
                        }
                    }
                    $adminController->display();
                //REDIRECTION SUR L'INDEX.PHP
                } elseif (isset($getClean['objet']) && ($getClean['objet'] === 'home')) {

                    header ("Location: index.php");
                }
                //REDIRECTION SUR LA PAGE SHOWCASE
                elseif (isset($getClean['objet']) && ($getClean['objet'] === 'showcase')) {
                    $postController->displayPostsShowcase();
                }
                //REDIRECTION SUR LA PAGE INTEGRATOR WEB
                elseif (isset($getClean['objet']) && ($getClean['objet'] === 'integrator')) {
                    $postController->displayPostsIntegrator();
                }
                //REDIRECTION SUR LA PAGE BLOG
                elseif (isset($getClean['objet']) && ($getClean['objet'] === 'blog')) {
                    $postController->displayPostsBlog();
                }
                //REDIRECTION SUR LA PAGE WORDPRESS
                elseif (isset($getClean['objet']) && ($getClean['objet'] === 'wordPress')) {
                    $postController->displayPostsWordpress();
                // PAGE CONTACT
                } elseif ((isset($getClean['objet']) && ($getClean['objet'] === 'contact'))) {
                    $contactController = new ContactController;
                    $contactController->display();
                // PAGE MENTIONS LEGALES
                } elseif ((isset($getClean['objet']) && ($getClean['objet'] === 'mentionsLegales'))) {
                    $legalController = new LegalController;
                    $legalController->displayMentions();
                // PAGE COOKIE
                } elseif ((isset($getClean['objet']) && ($getClean['objet'] === 'mentionsCookies'))) {
                    $legalController = new LegalController;
                    $legalController->displayCookie();
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