<?php $title = "Formulaire de contact"; ?>

<?php ob_start(); ?>

<section class="formContact">
    <h2 class="titleFormContact">Formulaire de contact</h2>
    <div class="form ">
		<div class="hedding-title">
			<h1><a href="index.php?objet=contact">Contactez moi !</a></h1>
		</div>
		<div class="hedding-description">
            <p>
                <a href="index.php?objet=contact">
                    Ma mission est bien plus que le developpement de votre site internet, je suis là pour vous accompagner à la reussite de votre activitée. Nous étudirons ensemble votre projet! Contactez moi par ce formulaire ou par téléphone.
                </a>
            </p>
            <p>
                Thomas ORTA : 06.12.14.92.55
            </p>
		</div>
		<div class="form-input">
            <form method="POST" action="index?objet=contact">
                <label for="name">Votre nom :</label><br>
                <input type="text" placeholder="Entrez votre nom" name="name"><br>
                
                <label for="firstName">Votre Prenom :</label><br>
				<input type="text" placeholder="Entrez votre prénom" name="firstName"><br>
                
                <label for="title">Titre de votre message :</label>
                <input type="text" name="title" placeholder="Titre"><br>

                <label for="email"> Votre Em@il :</label><br>
				<input type="text" placeholder="Email..." name='email'></br>
                
                <label for="message">Votre message :</label>
				<textarea rows="4" placeholder="Message.." name="message"></textarea>
				<button class="button">Send Message</button>
			</form> 
		</div>
	</div>
</section>

<script src="js/formContact.js"></script>
<script src="js/main.js"></script>

<?php
    $content = ob_get_clean(); 

    require_once('template.php'); 
?>

