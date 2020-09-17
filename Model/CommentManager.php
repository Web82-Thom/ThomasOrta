<?php

namespace Model;

use Model\Comment;
use Controller\Router;
use PDO;

class CommentManager extends Database
{
    public function hydrate(array $data) 
    {
        $comment = new Comment();
        foreach($data as $key => $value)
        {
            $method = 'set'.ucfirst($key);
            if (method_exists($comment, $method)) {
                $comment->$method($value);
            }
        }
        
        return $comment;
    }

    // RECUPERATION D'UN COMMENTAIRE
    public function getComment($commentId)
    {
        $req = $this->getDataBase()->prepare('SELECT id, author, comment, report, post_id, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin\') AS comment_date FROM comments WHERE id = ? ORDER BY comment_date DESC');
        $req->execute(array($commentId));
        $comments = [];
        while($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $comments[] = $this->hydrate($data);
        }
        $req->closeCursor();
        
        return $comments;
    }
    
    //RECUPERATION DES COMMENTAIRES PAR LE POST ID
    public function getCommentsByPostId($postId)
    {
        $req = $this->getDataBase()->prepare('SELECT id, author, comment, report, post_id, DATE_FORMAT(comment_date, \'%d/%m/%Y <em>à</em> %Hh%imin\') AS comment_date FROM comments WHERE post_id = ? ORDER BY comment_date DESC ');
        $req->execute(array($postId));
        $comments = [];
        while($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $comments[] = $this->hydrate($data);
        }
        $req->closeCursor();
        
        return $comments;
    }

    //RECUPERATION DES COMMENTAIRES
    public function getComments()
    {
        $req = $this->getDataBase()->prepare('SELECT id, author, comment, report, post_id, DATE_FORMAT(comment_date, \'%d/%m/%Y <em>à</em>à %Hh%imin\') AS comment_date FROM comments ORDER BY comment_date DESC /*LIMIT 5*/ ');
        $req->execute();
        $comments = [];
        while($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $comments[] = $this->hydrate($data);
        }
        $req->closeCursor();
        
        return $comments;
    }
    
    // AJOUT DES COMMENTAIRES
    public function add($postId, $author, $comment)
    {
        $add = $this->getDataBase()->prepare('INSERT INTO comments(post_id, author, comment, report, comment_date) VALUES(?, ?, ?, 0, NOW())');
        
        return $add->execute(array($postId, $author, $comment));
    }

    // MODIFICATION DES COMMENTAIRES
    public function update($commentId, $author, $comment)
    {
        $req = $this->getdataBase()->prepare('UPDATE comments SET author = ?, comment = ?, comment_date = NOW() WHERE id = ? LIMIT 1');

        return $req->execute(array($author, $comment, $commentId));
    }
}