<?php $title = "Admin-Modification de l'article " . $post->getTitle();; ?>

<?php ob_start(); ?>

<script>
	tinymce.init({
		selector: '#mytextarea',
		plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
		toolbar_mode: 'floating',
	});
</script>

<div id ="form">
	<form method="post" action="index.php?objet=post&action=update&id=<?= $post->getId();?>">
		<h2>Modification de l'article</h2>
		<div class="labelTitle">
			<h3><label for="title">Titre :</label></h3>
			<input type="text" placeholder="Titre" name ="title" <?php if (isset($post)) {echo 'value="' . $post->getTitle(). '"';} ?>>
		</div>
		<div class="labelContent">
			<h3><label for="content">Contenu :</label></h3>
			<textarea id="mytextarea" placeholder ="Rédiger votre article" name ="content"><?php if (isset($post)) {echo $post->getContent();} ?></textarea>
		</div>
			<button id="formButton" type="submit" value ="Poster les modification">Poster les modification</button>
	</form>
</div>

<?php $content = ob_get_clean(); 

 require_once('template.php');
?>