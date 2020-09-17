<?php

namespace Model;

use Controller\Router;

class ContactManager
{
    public function sendMail()
    {
        if (isset($_POST['mailForm'])) {
            if (!empty($_POST['name']) AND !empty($_POST['firstName']) AND !empty($_POST['email']) AND !empty($_POST['title']) AND !empty($_POST['message'])) {
                $header="MIME-Version: 1.0\r\n";
                $header .='From:"jf-blog.com"<support@thomasorta.com>'."\n";
                $header .='Content-Type:text/html; charset="uft-8"'."\n";
                $header .='Content-Transfer-Encoding: 8bit';

                $message='
                <html>
                    <body>
                        <div align="center">
                            <u>Nom et prenom de l\'expéditeur : </u>' . htmlspecialchars($_POST['name']) .' ' . htmlspecialchars($_POST['firstName']) .'<br />
                            <u>Mail de l\'expéditeur : </u>' . $_POST['email'].'
                            <br />
                            <hr>
                            <u>Titre : </u>'. htmlspecialchars(nl2br($_POST['title'])) .'
                            <br />
                            <u>Contenu du message : </u>'. htmlspecialchars(nl2br($_POST['message'])) .'
                            <br />
                        </div>
                    </body>
                </html>
                ';

                mail("thomasorta.forweb@gmail.com", "CONTACT - thomas-orta.com", $message, $header);
            }
            header('Location: index.php?objet=contact');
        }
    }
}
