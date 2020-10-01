<?php

namespace Controller;

use Model\PostManager;
use Model\CommentManager;

class PostController
{
    private $_postManager;
    private $_commentManager;

    public function __construct()
    {
        $this->_postManager = new PostManager();
        $this->_commentManager = new CommentManager();
    }

    public function displayPostsBlog() 
    {
        $posts = $this->_postManager->getPostsBlog();
        
        require_once('../view/blog.php');
    }
    
    public function displayPostsShowcase() 
    {
        $posts = $this->_postManager->getPostsShowcase();

        require_once('../view/showcase.php');
    }

    public function displayPostsIntegrator() 
    {
        $posts = $this->_postManager->getPostsIntegrator();

        require_once('../view/integrator.php');
    }

    public function displayPostsWordpress() 
    {
        $posts = $this->_postManager->getPostsWordpress();

        require_once('../view/wordPress.php');
    }

    // RECUPERATION D'UN POST
    public function display($postId)
    {
        $post = $this->_postManager->getPost($postId);
        $comments = $this->_commentManager->getCommentsByPostId($postId);

        require_once('../view/displayPost.php');
    }

    // AJOUT D'UN POST
    public function add($postClean)
    {   
        if (isset($_SESSION['firstAdmin']) && $_SESSION['firstAdmin'] == 1 ) {
            if (!empty($postClean['title']) && !empty($postClean['content'])) {
                $postId = $this->_postManager->add($postClean['title'], $postClean['content'], $postClean['category']);
                if ($postId > 0) {
                    header('Location: /article-' . $postId);
                }

                throw new Exception('Impossible d\'ajouter le post !');
            } 
            require_once('../view/formAddPost.php');
        }
        require_once('../view/noAccess.php');
    }

     // AFFICHAGE et MODIFICATION
    public function update($postId, $postClean) 
    {   
        if (isset($_SESSION['firstAdmin']) && $_SESSION['firstAdmin'] == 1 ) {
            if (!empty($postClean['title']) && !empty($postClean['content'])) {
                $this->_postManager->update($postId, $postClean['title'], $postClean['content']);

                header('Location: /article-' . $postId);
            } 
            $post = $this->_postManager->getPost($postId);

            require_once('../view/formUpdatePost.php');
        }
        require_once('../view/noAccess.php');
    }

    // AFFICHAGE et SUPPRESSION
    public function delete($postId, $postClean)
    {
        if (isset($_SESSION['firstAdmin']) && $_SESSION['firstAdmin'] == 1 ) {
            if (!empty($postClean['title']) && !empty($postClean['content'])) {
                $this->_postManager->delete($postId);

                header('Location: /login');
            }
            $post = $this->_postManager->getPost($postId);

            require_once('../view/formDeletePost.php');
        }
        require_once('../view/noAccess.php');
    }
}
