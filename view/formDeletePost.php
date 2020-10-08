<?php  $title = "Admin-Suppression de l'article " . $post->getTitle(); ?>

<?php ob_start(); ?>

<script>
    tinymce.init({
    selector: '#mytextarea',
    readonly: true,
    });
</script>

<div id ="form">
    <form method="post" action="index.php?objet=post&action=delete&id=<?= $post->getId();?>">
        <h2>Suppression de l'article <?= $post->getTitle();?></h2>
        <div class="labelTitle">
            <h3><label for="title">Titre :</label></h3>
            <input type="text" placeholder="Titre" name ="title" <?php if (isset($post)) {echo 'value="' . $post->getTitle(). '"';} ?>>
        </div>
        <div class="labelContent">
            <h3><label for="content">Contenu :</label></h3>
            <textarea id="mytextarea" placeholder ="contenu" name ="content"><?php if (isset($post)) {echo $post->getContent();} ?></textarea>
        </div>
        <button id="formButton" class="alertDelete" type="submit" value ="Supprimer">Supprimer l'article <?= $post->getTitle();?> et ses commentaires</button>
    </form>
</div>

<?php 
    $content = ob_get_clean(); 

    require_once('template.php');
?>