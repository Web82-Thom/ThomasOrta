<?php

namespace Controller;

use Model\PostManager;

class PostController
{
    private $_postManager;
    /*private $_commentShowcaseManager;*/

    public function __construct()
    {
        $this->_postManager = new PostManager();
        /*$this->_commentManager = new CommentManager();*/
    }

    public function displayPostsBlog() 
    {
        $posts = $this->_postManager->getPostsBlog();

        require_once('../view/blog.php');
    }
    
    public function displayPostsShowcase() 
    {
        $posts = $this->_postManager->getPostsBlog();

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
}