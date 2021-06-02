<?php
require_once("config.php");
function sendMessage($nom, $prenom,  $email, $sujet, $message)
{
    if (!empty($nom) && !empty($prenom))
    {
        $subject = "[$nom $prenom]";
        $subject .= " ";
        $subject .= $sujet;
    }
    else
    {
        $subject = $sujet;
    }

    $header = "From: $email";
    if (mail(config::$mail, $subject, $message, $header))
    {
        echo "Email envoyé avec succès";
    }
    else
    {
        echo "Erreur lors de l'envoi";
    }
}
