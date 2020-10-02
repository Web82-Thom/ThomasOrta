<?php $title = 'Mentions Légales'; ?>

<?php ob_start(); ?>

<section id="identification">
    <h1>Mentions légales</h1>
    <a href="https://www.service-public.fr/professionnels-entreprises/vosdroits/F31228">
        Réglementation des mentions légales
    </a></br>
    <a href="/accueil">
        Retour sur le site
    </a>
    <article id="informations">
        <ul>
            <h2>Informations</h2>
            <li>
                ORTA Thomas
            </li>
            <li>
                3150 routes de Genebrières</br>
                82 230 Léojac
            </li>
            <li>
                tel: 06.12.14.92.55
            </li>
            <li>
                thom.orta@gmail.com
            </li>
            <li>
                Rédaction: Thomas ORTA
            </li>
            <li>
                SIRET: 888 067 550 00010
            </li>
            <li>
                APE: 6201Z
            </li>
        </ul>
    </article>
    <article id="host">
        <ul>
            <h2>Hébergeur</h2>
            <li>
                IONOS by 1&1 SARL
            </li>
            <li>
                7 place de la Gare</br>
                BP 70 109</br>
                57200 Sarreguemines C 
            </li>
            <li>
                24h/24, 7j/7 au 0970 808 911 (appel non surtaxé) ou</br> par e-mail à l’adresse suivante: info@ionos.fr
            </li>
            <li>
                SIRET 431 303 775 000 16
            </li>
            <li>
                Code APE: 6201Z
            </li>
            <li>
                Identification intracommunautaire FR 13 431303775
            </li>
        </ul> 
    </article>
    <article id="activity">
        <ul>              
            <h2>Activité</h2>
            <li>
                Auto-Entrepreneur
            </li>
            <li>
                Développeur Web Junior
            </li>
            <li>
                En cours de préparation à l'obtention
                <!--Le titre professionnel a été octroyé en FRANCE-->
            </li>
            <li>
                L'organisme auprès duquel une inscription a été faite: 
                <a href="https://openclassrooms.com/">
                    openClassrooms
                </a> 
            </li>
        </ul>
    </article>
</section>

<?php 
    $content = ob_get_clean(); 

    require_once('template.php');
?>
