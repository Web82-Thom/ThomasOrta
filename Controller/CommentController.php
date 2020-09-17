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

    // AFFICHAGE AVANT MODIFICATION D'UN COMMENTAIRE
    public function update($commentId, $postId)
    {
        if (isset($_SESSION['firstAdmin']) && $_SESSION['firstAdmin'] == 1 ) {
            if (!empty($_POST['author']) && !empty($_POST['comment']) && isset($_SESSION['pseudo'])) {                          
                $this->_commentManager->update($commentId, $_POST['author'], $_POST['comment']);
                
                header('Location: index.php?objet=post&id=' . $postId);
            } 
            $comments = $this->_commentManager->getComment($commentId);

            require_once('../view/formUpdateComment.php');
        }   
        
        require_once('../view/noAccess.php');
    }
}