<?php

namespace Controller;

class Router
{   
    public function requete()
    {
        $options = [
            'id'=> FILTER_VALIDATE_INT,
            'objet' => FILTER_SANITIZE_SPECIAL_CHARS,
            'action' => FILTER_SANITIZE_SPECIAL_CHARS,
            'postId' => FILTER_VALIDATE_INT,
        ];

        $getClean = filter_var_array($_GET, $options);
        $postClean = filter_var_array($_POST);

        try {
            if (isset($getClean['objet'])) {

                $postController = new PostController();

                // --- POSTS ET COMMENTAIRES ---
                if ($getClean['objet'] === 'post')  {
                    $commentController = new CommentController();

                    if (isset($getClean['action'])) {
                        switch ($getClean['action']) {
                            case 'add':
                                $postController->add($postClean);
                                break;
                            case 'update':
                                if (isset($getClean['id'])) $postController->update($getClean['id'], $postClean);
                                break;
                            case 'delete':
                                if (isset($getClean['id'])) $postController->delete($getClean['id'], $postClean);
                                break;
                            case 'addComment':
                                if (isset($getClean['id'])) $commentController->add($getClean['id'], $postClean['author'], $postClean['comment'], $postClean);
                                break;
                            case 'updateComment':
                                if (isset($getClean['id'])) $commentController->update($getClean['id'], $getClean['postId'], $postClean);
                                break;
                            case 'deleteComment':
                                if (isset($getClean['id'])) $commentController->delete($getClean['id'], $postClean);
                                break;
                            case 'reportComment':
                                if (isset($getClean['id'])) $commentController->report($getClean['id'], $getClean['postId']);
                                break;
                            case 'unReportComment':
                                if (isset($getClean['id'])) $commentController->unReport($getClean['id']);
                                break;
                        }
                    } elseif (isset($getClean['id'])) {
                        $postController->display($getClean['id']);
                    } else {
                        $postController->displayPosts();
                    }
                }

                // --- COOKIE ---
                elseif ($getClean['objet'] === 'cookie') {
                    (new CookieController())->acceptCookie();
                }

                // --- ADMIN ---
                elseif ($getClean['objet'] === 'admin') {
                    $adminController = new AdminController();
                    if (isset($getClean['action'])) {
                        if ($getClean['action'] === 'login') $adminController->login();
                        elseif ($getClean['action'] === 'destroy') $adminController->destroy();
                    }
                    $adminController->display();
                }

                // --- PAGE D'ACCUEIL (HOME + FORM CONTACT) ---
                elseif ($getClean['objet'] === 'home') {
                    $homeController = new HomeController();
                    $homeController->displayHome();
                }

                // --- AUTRES PAGES ---
                elseif ($getClean['objet'] === 'showcase') {
                    $postController->displayPostsShowcase();
                } elseif ($getClean['objet'] === 'integrator') {
                    $postController->displayPostsIntegrator();
                } elseif ($getClean['objet'] === 'blog') {
                    $postController->displayPostsBlog();
                } elseif ($getClean['objet'] === 'wordPress') {
                    $postController->displayPostsWordpress();
                }

                // --- MENTIONS LÉGALES ---
                elseif ($getClean['objet'] === 'mentionsLegales') {
                    (new LegalController())->displayMentions();
                } elseif ($getClean['objet'] === 'mentionsCookies') {
                    (new LegalController())->displayCookie();
                }

            } else {
                // --- PAR DÉFAUT → HOME ---
                $homeController = new HomeController();
                $homeController->displayHome();
            }
        }
        catch (\Exception $e) {
            $errorMsg = $e->getMessage();
            require_once('../views/viewError.php');
        }
    }
}
