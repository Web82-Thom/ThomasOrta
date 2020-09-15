<?php

namespace Controller;

use Model\PostIntegratorManager;

class PostIntegratorController
{
    private $_postIntegratorManager;
    /*private $_commentShowcaseManager;*/

    public function __construct()
    {
        $this->_postIntegratorManager = new PostIntegratorManager();
        /*$this->_commentManager = new CommentManager();*/
    }

    public function displayPosts() 
    {
        $posts = $this->_postIntegratorManager->getPosts();

        require_once('../view/integrator.php');
    }
}