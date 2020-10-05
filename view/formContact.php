<?php $title = "Formulaire de contact"; ?>

<?php ob_start(); ?>

<section class="formContact">
    <h2 class="titleFormContact">Formulaire de contact</h2>
    <div class="form ">
		<div class="heddingTitle">
			<h2><a href="index.php?objet=contact">Contactez moi !</a></h2>
		</div>
		<div class="heddingDescription">
            <p>
                <a href="index.php?objet=contact">
                    Ma mission est bien plus que le developpement de votre site internet, je suis là pour vous accompagner à la reussite de votre activitée. Nous étudirons ensemble votre projet! Contactez moi par ce formulaire ou par téléphone.
                </a>
            </p>
            <p>
                Thomas ORTA : 06.12.14.92.55
            </p>
		</div>
		<div class="formInput">
            <form method="POST" action="index?objet=contact">
                <label for="inputContactName">Votre nom :</label><br>
                <input id="inputContactName" type="text" placeholder="Entrez votre nom" name="name" maxlength="20" required="required" /><br>
                <label for="inputContactFirstName">Votre Prenom :</label><br>
				<input id="inputContactFirstName" type="text" placeholder="Entrez votre prénom" name="firstName" maxlength="20" required="required" /><br>
                <label for="inputContactTitle">Titre de votre message :</label><br>
                <input id="inputContactTitle" type="text" name="title" placeholder="Titre" maxlength="20" required="required"><br>
                <label for="inputContactEmail"> Votre Em@il :</label><br>
				<input id="inputContactEmail" type="text" placeholder="Email..." name="email" maxlength="50" required="required"/><br>
                <label for="inputContactMessage">Votre message :</label>
                <textarea id="inputContactMessage" rows="4" placeholder="Message.." name="message" maxlength="150" required="required"></textarea>
                <input id="inputContactCheck" type="checkbox" value="0" name="acceptSend" required="required">
                <label for="inputContactCheck">En cochant cette case vous acceptez de me communiquer vos informations.</label>
				<button id="formButton" name="mailForm" type="submit"  title="Envoyer" >Envoyez votre message</button>
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

