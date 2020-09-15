<?php

namespace Controller;

use Model\PostWordPressManager;

class PostWordPressController
{
    private $_PostWordPressManager;
    /*private $_commentShowcaseManager;*/

    public function __construct()
    {
        $this->_postWordPressManager = new PostWordPressManager();
        /*$this->_commentManager = new CommentManager();*/
    }

    public function displayPosts() 
    {
        $posts = $this->_postWordPressManager->getPosts();

        require_once('../view/wordPress.php');
    }
}