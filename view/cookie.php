<?php $title = 'Cookie'; ?>

<?php ob_start(); ?>
    
    <section id="cookie">
        <h1>Mentions relatives à l'utilisation de cookies</h1>
        <article id="cookieInfos">
            <a href="https://www.service-public.fr/professionnels-entreprises/vosdroits/F31228">
                Réglementation des mentions relatives à l'utilisation de cookies
            </a></br>
            <a href="index.php?objet=home">
                Retour sur le site
            </a>
            <p>
                Un cookie est un petit fichier informatique, un traceur. Il permet d'analyser le comportement des usagers lors de la visite d'un site internet, de la lecture d'un courrier électronique, de l'installation ou de l'utilisation d'un logiciel ou d'une application mobile.
            </p>
            <p>
                Les éditeurs de sites ou d'applications qui utilisent des cookies doivent :
            </p></br>
            <ul>
                <li>
                    la finalité des cookies à pour but de vous faciliter le remplissage du formulaire de contact.
                </li>
                <li>
                    En acceptant les cookies vous donnez votre consentement.
                </li>
                <li>
                    si vous refusez je vous devez quitter le site.
                </li>
                <li>
                    La durée de validité du consentement donné dans ce cadre est de 13 mois maximum.
                </li>
            </ul>
        </article>
        <article id="cookieMentions">
            <h2>Mentions relatives à l'utilisation de données personnelles</h2>
            <p>
                Les sites qui utilisent des données personnelles doivent obligatoires mentionner les informations suivantes :
            </p></br>
            <p>
                finalité poursuivie par le traitement auquel les données sont destinées: </br>
                par l'envoi du formulaire de contact, aucune donné est enregistré sur le serveur, vos informations me sont envoyées par mail afin de vous répondre, seules vos informations Nom, Prénom et Email sont stockés sur votre navigateur. Pour les supprimer veuillez vider vos cookies via les options de votre navigateur.</br>
                Par participation des commentaires, sont données sont stockés sur une base de donnés, héberger par Ionos 1&1.
            </p>
            <p>
                Caractère obligatoire ou facultatif des réponses et conséquences éventuelles à l'égard de l'internaute d'un défaut de réponse
            </p>
            <p>
                Destinataires des données : mail et base de donné Ionos.
            </p>
            <p>
                Droits d'opposition, d'interrogation, d'accès et de rectification <a href="https://www.cnil.fr/fr/le-droit-dopposition-refuser-lutilisation-de-vos-donnees">Cnil</a>
            </p>
            <p>
                Base juridique du traitement de données <a href="https://www.cnil.fr/fr/definition/base-legale#:~:text=La%20base%20l%C3%A9gale%20d'un,%C2%AB%20base%20juridique%20%C2%BB%20du%20traitement.">Cnil</a>
            </p>
            <p>
                Formalité pour une réclamation (plainte) auprès de la <a href="https://www.cnil.fr/fr/cnil-direct/question/adresser-une-reclamation-plainte-la-cnil-quelles-conditions-et-comment">Cnil</a>
            </p>
        </article>
    </section>

<?php 
    $content = ob_get_clean(); 

    require_once('template.php');
?>

