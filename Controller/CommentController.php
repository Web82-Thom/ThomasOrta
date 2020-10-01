<?php

namespace Controller;

use Model\PostManager;
use Model\CommentManager;

class CommentController 
{
    private $_commentManager;

    public function __construct()
    {
        $this->_commentManager = new CommentManager();
    }

    // AJOUT D'UN COMMENTAIRE
    public function add($postId, $author, $comment, $postClean)
    {   
        if (!empty($author) && !empty($comment)) {
            $this->_commentManager->add($postId, $author, $comment);
            if ($postId > 0) {
                header('Location: article-' . $postId);
            }

            throw new Exception('Impossible d\'ajouter le commentaire !');
        } 
        header('Location: index.php?objet=post&id=' . $postId);
    }

    // AFFICHAGE AVANT MODIFICATION D'UN COMMENTAIRE
    public function update($commentId, $postId, $postClean)
    {
        if (isset($_SESSION['firstAdmin']) && $_SESSION['firstAdmin'] == 1 ) {
            if (!empty($postClean['author']) && !empty($postClean['comment']) && isset($_SESSION['pseudo'])) {                          
                $this->_commentManager->update($commentId, $postClean['author'], $postClean['comment']);
                
                header('Location: /article-' . $postId);
            } 
            $comments = $this->_commentManager->getComment($commentId);

            require_once('../view/formUpdateComment.php');
        }   
        
        require_once('../view/noAccess.php');
    }

    // AFFICHAGE AVANT SUPPRESSION D'UN COMMENTAIRE
    public function delete($commentId, $postClean)
    {   if (isset($_SESSION['firstAdmin']) && $_SESSION['firstAdmin'] == 1 ) {
            if ($commentId >= 0 && !empty($postClean['author']) && !empty($postClean['comment'])) {
                $this->_commentManager->delete($commentId);
                if ($commentId > 0) {
                    header('Location: /login');
                }

                throw new Exception('Impossible de supprimer le commentaire !');
            }
            $comments = $this->_commentManager->getComment($commentId);

            require_once('../view/formDeleteComment.php');
        }

        require_once('../view/noAccess.php');
    }
    
    // SIGNALER UN COMMENTAIRE
    public function report($commentId, $postId)
    {  
        $comments = $this->_commentManager->getComment($commentId);
        foreach ($comments as $comment) {
            $report = $comment->getReport($commentId);
            if ($report == 0) {
                $this->_commentManager->report($commentId);
                $report ++ ;

                header('Location: /article-' . $postId);
            } elseif ($report == 1) {
                echo 'déjà signaler';
            }
        }
    }

    // ENLEVER LE SIGNALEMENT
    public function unReport($commentId)
    {   
        if (isset($_SESSION['firstAdmin']) && $_SESSION['firstAdmin'] == 1 ) {
            $comments = $this->_commentManager->getComment($commentId);
            foreach ($comments as $comment) {
                $report = $comment->getReport($commentId);
                if ($report == 1) {
                    $this->_commentManager->unReport($commentId);
                    $report -- ;

                    header('Location: /login');
                } 
            }
        }

        require_once('../view/noAccess.php');
    }
}
