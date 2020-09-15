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
}
