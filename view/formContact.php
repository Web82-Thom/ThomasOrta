<?php $title = "Formulaire de contact"; ?>

<?php ob_start(); ?>

<section class="formContact">
    <h2 class="titleFormContact">Formulaire de contact</h2>
    <div class="form ">
		<div class="heddingTitle">
			<h1><a href="index.php?objet=contact">Contactez moi !</a></h1>
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
            <form method="POST" action="index?objet=contact"><br>
                <label for="name">Votre nom :</label><br>
                <input id="inputContactName" type="text" placeholder="Entrez votre nom" name="name" maxlength="20" /><br>
                
                <label for="firstName">Votre Prenom :</label><br>
				<input id="inputContactFirstName" type="text" placeholder="Entrez votre prénom" name="firstName" maxlength="20" /><br>
                
                <label for="title">Titre de votre message :</label><br>
                <input id="inputContactTitle" type="text" name="title" placeholder="Titre" maxlength="20"><br>

                <label for="email"> Votre Em@il :</label><br>
				<input id="inputContactEmail" type="text" placeholder="Email..." name="email" maxlength="50" /><br>
                
                <label for="message">Votre message :</label>
                <textarea id="inputContactMessage" rows="4" placeholder="Message.." name="message" maxlength="150"></textarea>
                
                <div>
                    <input id="inputContactCheck" type="checkbox" id="acceptSend" value="0" name="acceptSend">
                    <label for="acceptSend">
                        En cochant cette case vous acceptez de me communiquer vos informations.
                    </label>
                </div>
				<button id="formButton">Envoyez votre message</button>
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

