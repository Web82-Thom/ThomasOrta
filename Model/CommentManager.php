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

    // AJOUT DES COMMENTAIRES
    public function add($postId, $author, $comment)
    {
        $add = $this->getDataBase()->prepare('INSERT INTO comments(post_id, author, comment, report, comment_date) VALUES(?, ?, ?, 0, NOW())');
        
        return $add->execute(array($postId, $author, $comment));
    }
}