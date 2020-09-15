<?php

namespace Model;

use Model\Post;
use Controller\Router;
use PDO;

class PostManager extends Database
{
    
    //HYDRATATION
    public function hydrate(array $data) 
    {
        $post = new Post();
        foreach($data as $key => $value)
        {
            $method = 'set'.ucfirst($key);
            if (method_exists($post, $method)) { 
                $post->$method($value);
            }
        }

        return $post;
    }
    //METHODE POUR RECUPERER LES POSTS SHOWCASE
    public function getPostsShowcase()
    {
        $req = $this->getDataBase()->prepare(' SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y <em>à</em> %Hh%imin\') AS creation_date FROM posts WHERE category = "showcase" ');
        $req->execute();
        $posts = [];
        while($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $posts[] = $this->hydrate($data);
        }
        $req->closeCursor();
        
        return $posts;
    }
    //METHODE POUR RECUPERER LES POSTS BLOG
    public function getPostsBlog()
    {
        $req = $this->getDataBase()->prepare(' SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y <em>à</em> %Hh%imin\') AS creation_date FROM posts WHERE category = "blog" ');
        $req->execute();
        $posts = [];
        while($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $posts[] = $this->hydrate($data);
        }
        $req->closeCursor();
        
        return $posts;
    }
     //METHODE POUR RECUPERER LES POSTS INTEGRATOR
     public function getPostsIntegrator()
     {
         $req = $this->getDataBase()->prepare(' SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y <em>à</em> %Hh%imin\') AS creation_date FROM posts WHERE category = "integrator" ');
         $req->execute();
         $posts = [];
         while($data = $req->fetch(PDO::FETCH_ASSOC)) {
             $posts[] = $this->hydrate($data);
         }
         $req->closeCursor();
         
         return $posts;
     }

     //METHODE POUR RECUPERER LES POSTS WORDPRESS
    public function getPostsWordpress()
    {
        $req = $this->getDataBase()->prepare(' SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y <em>à</em> %Hh%imin\') AS creation_date FROM posts WHERE category = "wordpress" ');
        $req->execute();
        $posts = [];
        while($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $posts[] = $this->hydrate($data);
        }
        $req->closeCursor();
        
        return $posts;
    }

    //METHODE POUR RECUPERER 1 POSTS
    public function getPost($postId)
    {
        $req = $this->getDataBase()->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y <em>à</em> %Hh%imin\') AS creation_date FROM posts WHERE id = ? ');
        $req->execute(array($postId));

        return $this->hydrate($req->fetch(PDO::FETCH_ASSOC));
    }
}