<?php

class Token
{
    public static function generate()
    {
        return $_SESSION["csrf_token"] = bin2hex(random_bytes(32));
    }

    public static function check($token)
    {
        return (isset($_SESSION["csrf_token"]) && $token === $_SESSION["csrf_token"]);
    }

    public static function get()
    {
        return $_SESSION["csrf_token"];
    }
}
