<?php

namespace Controller;

use Model\PostBlogManager;

class PostBlogController
{
    private $_postBlogManager;
    /*private $_commentShowcaseManager;*/

    public function __construct()
    {
        $this->_postBlogManager = new PostBlogManager();
        /*$this->_commentManager = new CommentManager();*/
    }

    public function displayPosts() 
    {
        $posts = $this->_postBlogManager->getPosts();

        require_once('../view/blog.php');
    }
}