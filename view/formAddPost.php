<?php $title = "Admin-Rédaction"; ?>

<?php ob_start(); ?>

<script>
	tinymce.init({
	selector: 'textarea',
	plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
	toolbar_mode: 'floating',
});
</script>

<section id ="form">
	<form method="post" action="index.php?objet=post&action=add">
		<h2>Rédaction de vos articles</h2>
		<div class='labelCategory'>
            <h3><label for="category">Catégorie</label></h3>
            <select name="category" id="category">
                <option value="">--Choisissez une catégorie--</option>
                <option value="showcase">Site vitrine</option>
                <option value="blog">Site Blog</option>
                <option value="integrator">Integrateur</option>
                <option value="wordpress">WordPress</option>
            </select>
        </div>
		<div class="labelTitle">
			<h3><label for="title">Titre :</label></h3>
			<input type="text" placeholder="Indiquer le Titre" name ="title" <?php if (isset($post)) {echo 'value="' . $post->getTitle(). '"';} ?>>
		</div>
		<div class="labelContent">
			<h3><label for="content">Contenu :</label></h3>
			<textarea id="mytextarea" placeholder ="Rédiger votre article" name ="content"><?php if (isset($post)) {echo $post->getContent();} ?></textarea>
		</div>
			<button id="formButton" type="submit" value ="Envoyer un nouveau post!">Envoyer un nouveau post!</button>
	</form>
</section>

<?php 
	$content = ob_get_clean(); 

	require_once('template.php');
?>