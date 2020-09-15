<?php $title = htmlspecialchars($post->getTitle()); ?>

<?php ob_start(); ?>

<article class="contentPosts"> 
    <div class="titleTickets">
        <h3 class="titleTicket"><?= $post->getTitle(); ?></h3>
        <p class="dateInfos">
            publié le <?= $post->getCreationDate();?>
        </p> 
    </div>
    <div class="postContent">
        <p class="postText">
            <?= $post->getContent();?>
        </p>
    </div>
</article>
<section id="formAddComment">
    <h3 id="formTitle">Ajouter votre commentaires</h3>
    <p>
        Chères Lecteurs et Lectrices, je vous invite à partager vos commentaires. 
    </p>
    <div id="citation">
        <q>
            Le respect mutuel est le fondement de la véritable harmonie.
        </q>
        <em>
            - Dalaï Lama -
        </em>
    </div>
    <form id="formContent" method="post" action="index.php?objet=post&action=addComment&id=<?= $postId ?>">
        <div>
            <label for="author">Auteur</label><br />
            <input type="text" id="author" name="author" />
        </div>
        <div>
            <label for="comment">Commentaire</label><br />
            <textarea id="comment" name="comment"></textarea>
        </div>
        <div>
            <button id="submitComment" type="submit">Poster votre commentaire</button>
        </div>
    </form>
</section>
<?php 
    $content = ob_get_clean(); 

    require_once('template.php');
?>
