<?php

require_once("config.php");
require_once("input.php");
require_once("sendmail.php");
require_once("token.php");

session_start();

if (Input::exists())
{
    if (token::check(Input::get("csrf_token")))
    {
        if (Input::get("action") === "sendmail")
        {
            $nom = htmlspecialchars(Input::get("nom"), ENT_QUOTES | ENT_SUBSTITUTE);
            $prenom = htmlspecialchars(Input::get("prenom"), ENT_QUOTES | ENT_SUBSTITUTE);
            $email = filter_var(Input::get("email"), FILTER_SANITIZE_EMAIL);

            $titre = htmlspecialchars(Input::get("titre"), ENT_QUOTES | ENT_SUBSTITUTE);
            $message = htmlspecialchars(Input::get("message"), ENT_QUOTES | ENT_SUBSTITUTE);

            if (!empty($email) && !empty($titre) && !empty($message))
            {
                sendMessage($nom, $prenom, $email, $titre, $message);
            }
            else
            {
                echo "Erreur, données manquantes";
            }
        }
    }
}
