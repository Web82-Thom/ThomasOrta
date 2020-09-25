<?php $title = 'Cookie'; ?>

<?php ob_start(); ?>
    
    <section id="cookie">
        <h1>Mentions relatives à l'utilisation de cookies</h1>
        <article id="cookieInfos">
            <a href="https://www.service-public.fr/professionnels-entreprises/vosdroits/F31228">
                Réglementation des mentions relatives à l'utilisation de cookies
            </a></br>
            <a href="../public/index.php">
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
                    informer les internautes de la finalité des cookies,
                </li>
                <li>
                    obtenir leur consentement,
                </li>
                <li>
                    fournir aux internautes un moyen de les refuser.
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
                Coordonnées du délégué à la protection des données (DPO ou DPD) de l'organisme, s'il a été désigné, ou d'un point de contact sur les questions de protection des données personnelles
            </p>
            <p>
                Finalité poursuivie par le traitement auquel les données sont destinées
            </p>
            <p>
                Caractère obligatoire ou facultatif des réponses et conséquences éventuelles à l'égard de l'internaute d'un défaut de réponse
            </p>
            <p>
                Destinataires ou catégories de destinataires des données
            </p>
            <p>
                Droits d'opposition, d'interrogation, d'accès et de rectification
            </p>
            <p>
                Au besoin, les transferts de données à caractère personnel envisagés à destination d'un État n'appartenant pas à l'Union européenne
            </p>
            <p>
                Base juridique du traitement de données (c'est-à-dire ce qui autorise légalement le traitement : il peut s'agir du consentement des personnes concernées, du respect d'une obligation prévue par un texte, de l'exécution d'un contrat notamment)
            </p>
            <p>
                Mention du droit d'introduire une réclamation (plainte) auprès de la Cnil
            </p>
        </article>
    </section>

<?php 
    $content = ob_get_clean(); 

    require_once('template.php');
?>

