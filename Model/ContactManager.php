<?php

namespace Model;

class ContactManager
{
    public function sendMail(): bool
    {
        // Vérifie si le formulaire a été soumis
        if (!isset($_POST['mailForm'])) {
            return false;
        }

        // Vérifie les champs requis
        $required = ['name', 'firstName', 'email', 'title', 'message'];
        foreach ($required as $field) {
            if (empty($_POST[$field])) {
                return false;
            }
        }

        // Nettoyage et validation des données
        $name = htmlspecialchars($_POST['name']);
        $firstName = htmlspecialchars($_POST['firstName']);
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $title = htmlspecialchars($_POST['title']);
        $message = htmlspecialchars($_POST['message']);

        if (!$email) {
            return false; // Email invalide
        }

        // Construction du message HTML
        $htmlMessage = "
        <html>
            <body style='font-family:Arial,sans-serif;background:#f9fafb;padding:20px;'>
                <div style='background:#fff;padding:20px;border-radius:8px;'>
                    <h2 style='color:#111;'>📩 Nouveau message depuis le site Thomas Orta</h2>
                    <p><strong>Nom :</strong> {$name} {$firstName}</p>
                    <p><strong>Email :</strong> {$email}</p>
                    <hr>
                    <p><strong>Titre :</strong> {$title}</p>
                    <p><strong>Message :</strong><br>" . nl2br($message) . "</p>
                </div>
            </body>
        </html>";

        // Configuration des headers (expéditeur conforme à ton domaine)
        $to = "thom.orta@gmail.com";
        $subject = "CONTACT - thomas-orta.fr";
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $headers .= "From: Thomas Orta <thomasorta@thomasorta.fr>\r\n";
        $headers .= "Cc: thomasorta@thomasorta.fr\r\n";
        $headers .= "Reply-To: {$email}\r\n";

        // Envoi du mail
        $success = mail($to, $subject, $htmlMessage, $headers);

        // // Log du résultat
        // $logFile = __DIR__ . '/mail_log.txt';
        // file_put_contents(
        //     $logFile,
        //     date('Y-m-d H:i:s') . " | " . ($success ? '✅ OK' : '❌ FAIL') . " | {$email} | {$title}\n",
        //     FILE_APPEND
        // );

        // Retourne toujours un booléen
        return $success;
    }
}
