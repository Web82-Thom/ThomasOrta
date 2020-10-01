<?php $title = "Site Blog"; ?>

<?php ob_start(); ?>

<section class="posts">
    <h2 class='titleService'> Votre site Blog </h2>
    <?php foreach ($posts as $post) { ?>
        <article class="contentPosts">
            <div class="titleTickets">
                <h3 class="titleTicket"><a href="/article-<?= $post->getId(); ?>"><?= $post->getTitle();?></a></h3>
                <p class="dateInfos">
                   publié le <?= $post->getCreationDate();?>
                </p>
            </div>
            <div class="postContent">
                <?= substr($post->getContent(),0 ,500), ' ' ;?>
                
                <a class="more" href="/article-<?= $post->getId(); ?>">...afficher plus</a>
            </div>
        </article>
    <?php } ?>
</section>

<?php 
    $content = ob_get_clean(); 
    
    require_once("template.php"); 
?>