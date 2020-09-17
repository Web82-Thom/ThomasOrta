<?php

namespace Controller;

class Router
{   
    public function requete()
    {
        try {   
            // DETERMINE L'ACTION DE L'UTILISATEUR 
            if (isset($_GET['objet'])) {
                $postController = new PostController();
                //ROUTES
                if ($_GET['objet'] === 'post')  {
                    if (isset($_GET['action'])) {
                        $commentController = new CommentController();
                        // AJOUT D'UN POST
                        if ($_GET['action'] === 'add') {
                            $postController->add();
                        // AFFICHAGE AVANT MODIF D'UN POST
                        } elseif ($_GET['action'] === 'update' && isset($_GET['id'])) { 
                            $postController->update($_GET['id']);
                        // AFFICHAGE AVANT SUPPRESSION 
                        } elseif ($_GET['action'] === 'delete' && isset($_GET['id'])) { 
                            $postController->delete($_GET['id']);
                        // AJOUT DE COMMENTAIRE
                        } elseif ($_GET['action'] === 'addComment' && isset($_GET['id'])) {
                            $commentController->add($_GET['id'], $_POST['author'], $_POST['comment']);
                        // AFFICHAGE AVANT MODIFICATION D'UN COMMENTAIRE*/
                        } elseif ($_GET['action'] === 'updateComment' && isset($_GET['id'])) {
                            $commentController->update($_GET['id'], $_GET['postId']);
                        // AFFICHAGE AVANT SUPPRESSION D'UN COMMENTAIRE
                        } elseif ($_GET['action'] === 'deleteComment' && isset($_GET['id'])) {
                            $commentController->delete($_GET['id']);
                        // SIGNALEMENT D'UN COMMENTAIRE
                        } elseif ($_GET['action'] === 'reportComment' && isset($_GET['id'])) {
                            $commentController->report($_GET['id'], $_GET['postId']);
                        // ENLEVER LE SIGNALEMENT D'UN COMMENTAIRE
                        } elseif ($_GET['action'] === 'unReportComment' && isset($_GET['id'])) {
                            $commentController->unReport($_GET['id']);
                        }
                    //AFFICHAGE D'1 POST ET SES COMMENTAIRES
                    } elseif (isset($_GET['id'])) {
                        $postController->display($_GET['id']);
                    // AFFICHAGE DE TOUS LES POST
                    } else {
                        $postController->displayPosts();
                    }
                //REDIRECTION SUR L'ADMIN
                } elseif ($_GET['objet'] === 'admin') {
                    $adminController = new AdminController();
                    if (isset($_GET['action'])) {
                        if ($_GET['action'] === 'login') {
                            $adminController->login();
                        } elseif ($_GET['action'] === 'destroy') { 
                            $adminController->destroy();
                        }
                    }
                    $adminController->display();
                //REDIRECTION SUR L'INDEX.PHP
                } elseif (isset($_GET['objet']) && ($_GET['objet'] === 'home')) {

                    header ("Location: index.php");
                }
                //REDIRECTION SUR LA PAGE SHOWCASE
                elseif (isset($_GET['objet']) && ($_GET['objet'] === 'showcase')) {
                    $postController->displayPostsShowcase();
                }
                //REDIRECTION SUR LA PAGE INTEGRATOR WEB
                elseif (isset($_GET['objet']) && ($_GET['objet'] === 'integrator')) {
                    $postController->displayPostsIntegrator();
                }
                //REDIRECTION SUR LA PAGE BLOG
                elseif (isset($_GET['objet']) && ($_GET['objet'] === 'blog')) {
                    $postController->displayPostsBlog();
                }
                //REDIRECTION SUR LA PAGE WORDPRESS
                elseif (isset($_GET['objet']) && ($_GET['objet'] === 'wordPress')) {
                    $postController->displayPostsWordpress();
                // PAGE CONTACT
                } elseif ((isset($_GET['objet']) && ($_GET['objet'] === 'contact'))) {
                    $contactController = new ContactController;
                    $contactController->display();
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