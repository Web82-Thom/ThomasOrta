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
                        /*// AFFICHAGE AVANT MODIF D'UN POST
                        } elseif ($getClean['action'] === 'update' && isset($getClean['id'])) { 
                            $postController->update($getClean['id']);
                        // AFFICHAGE AVANT SUPPRESSION 
                        } elseif ($getClean['action'] === 'delete' && isset($getClean['id'])) { 
                            $postController->delete($getClean['id']);*/
                        // AJOUT DE COMMENTAIRE
                        } elseif ($_GET['action'] === 'addComment' && isset($_GET['id'])) {
                            $commentController->add($_GET['id'], $_POST['author'], $_POST['comment']);
                        // AFFICHAGE AVANT SUPPRESSION D'UN COMMENTAIRE
                        /*} elseif ($getClean['action'] === 'deleteComment' && isset($getClean['id'])) {
                            $commentController->delete($getClean['id']);
                        // AFFICHAGE AVANT MODIFICATION D'UN COMMENTAIRE
                        } elseif ($getClean['action'] === 'updateComment' && isset($getClean['id'])) {
                            $commentController->update($getClean['id'], $getClean['postId']);
                        // SIGNALEMENT D'UN COMMENTAIRE
                        } elseif ($getClean['action'] === 'reportComment' && isset($getClean['id'])) {
                            $commentController->report($getClean['id'], $getClean['postId']);
                        // ENLEVER LE SIGNALEMENT D'UN COMMENTAIRE
                        } elseif ($getClean['action'] === 'unReportComment' && isset($getClean['id'])) {
                            $commentController->unReport($getClean['id']);*/
                        }
                    //AFFICHAGE D'1 POST ET SES COMMENTAIRES
                    } elseif (isset($_GET['id'])) {
                        $postController->display($_GET['id']);
                    // AFFICHAGE DE TOUS LES POST
                    } else {
                        $postController->displayPosts();
                    }
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