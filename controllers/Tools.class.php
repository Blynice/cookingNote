<?php

/**
 * @ Tools
 *  Messages d'alertes 
 */
class Tools

{
    public const DANGER_ALERT = " alert-danger";
    public const WARNING_ALERT = " alert-warning";
    public const SUCCESS_ALERT = " alert-success";

    public static function alertMessage($message, $type)
    {
        $_SESSION['alert'] = [
            "message" => $message,
            "type" => $type
        ];
    }
}

//Pour générer un mot de passe crypter, à utiliser lors des tests
/*echo password_hash("test", PASSWORD_DEFAULT);*/