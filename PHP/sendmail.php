<?php
    require_once("config.php");
    function sendMessage($nom, $email, $sujet, $texte)
    {
        if (mail(config::$mail, $sujet, $nom . "\n" . $texte, "From: $email"))
        {
            echo "Email envoyé avec succès";
        }
        else 
        {
            echo "Erreur lors de l'envoi";
        }
    }
?>