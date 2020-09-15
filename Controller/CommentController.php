<?php

namespace Controller;

use Model\PostManager;
use Model\CommentManager;

class CommentController 
{
    private $_commentManager;
    //private $_adminController;

    public function __construct()
    {
        $this->_commentManager = new CommentManager();
        //$this->_adminController = new AdminController();
    }

    // AJOUT D'UN COMMENTAIRE
    public function add($postId, $author, $comment)
    {   
        if (!empty($author) && !empty($comment)) {
            $this->_commentManager->add($postId, $author, $comment);
            if ($postId > 0) {
                header('Location: index.php?objet=post&id=' . $postId);
            }

            throw new Exception('Impossible d\'ajouter le commentaire !');
        } 
        header('Location: index.php?objet=post&id=' . $postId);
    }
}