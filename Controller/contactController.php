<?php

namespace Model;

class ContactManager
{
    public function sendMail(): bool
    {
        // Vérifie si le formulaire a été soumis
        if (isset($_POST['mailForm'])) {

            // Récupération & nettoyage des champs
            $name      = trim(htmlspecialchars($_POST['name'] ?? ''));
            $firstName = trim(htmlspecialchars($_POST['firstName'] ?? ''));
            $email     = trim($_POST['email'] ?? '');
            $title     = trim(htmlspecialchars($_POST['title'] ?? ''));
            $message   = trim(htmlspecialchars($_POST['message'] ?? ''));

            // Vérification basique
            if (empty($name) || empty($firstName) || empty($email) || empty($title) || empty($message)) {
                return false;
            }

            // Validation de l'email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return false;
            }

            // Préparation de l'e-mail
            $to      = "thomasorta.forweb@gmail.com"; // 🔹 ton adresse de réception
            $subject = "📩 Nouveau message via thomas-orta.fr";

            $body = "
            <html>
            <body style='font-family:Arial, sans-serif;'>
                <div style='background:#f9fafb; padding:15px; border-radius:8px;'>
                    <h2 style='color:#2563eb;'>Nouveau message de contact</h2>
                    <p><strong>Nom :</strong> {$name} {$firstName}</p>
                    <p><strong>Email :</strong> {$email}</p>
                    <p><strong>Sujet :</strong> {$title}</p>
                    <hr>
                    <p><strong>Message :</strong><br>" . nl2br($message) . "</p>
                </div>
            </body>
            </html>";

            // En-têtes de l’e-mail
            $headers  = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type:text/html; charset=UTF-8\r\n";
            $headers .= "From: {$firstName} {$name} <{$email}>\r\n";
            $headers .= "Reply-To: {$email}\r\n";

            // Envoi du mail (retourne true/false)
            return mail($to, $subject, $body, $headers);
        }

        return false;
    }
}
