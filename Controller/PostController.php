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
    public function add()
    {   
        if (isset($_SESSION['firstAdmin']) && $_SESSION['firstAdmin'] == 1 ) {
            if (!empty($_POST['title']) && !empty($_POST['content'])) {
                $postId = $this->_postManager->add($_POST['title'], $_POST['content'], $_POST['category']);
                if ($postId > 0) {
                    header('Location: index.php?objet=post&id=' . $postId);
                }

                throw new Exception('Impossible d\'ajouter le post !');
            } 
            require_once('../view/formAddPost.php');
        }
        require_once('../view/noAccess.php');
    }

     // AFFICHAGE et MODIFICATION
    public function update($postId) 
    {   
        if (isset($_SESSION['firstAdmin']) && $_SESSION['firstAdmin'] == 1 ) {
            if (!empty($_POST['title']) && !empty($_POST['content'])) {
                $this->_postManager->update($postId, $_POST['title'], $_POST['content']);

                header('Location: index.php?objet=post&id=' . $postId);
            } 
            $post = $this->_postManager->getPost($postId);

            require_once('../view/formUpdatePost.php');
        }
        require_once('../view/noAccess.php');
    }
}
