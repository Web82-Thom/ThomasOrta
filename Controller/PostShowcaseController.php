<?php

namespace Controller;

use Model\PostShowcaseManager;

class PostShowcaseController
{
    private $_postShowcaseManager;
    /*private $_commentShowcaseManager;*/

    public function __construct()
    {
        $this->_postShowcaseManager = new PostShowcaseManager();
        /*$this->_commentManager = new CommentManager();*/
    }

    public function displayPosts() 
    {
        $posts = $this->_postShowcaseManager->getPosts();

        require_once('../view/showcase.php');
    }
}