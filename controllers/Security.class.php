<?php

/**
 * @Security
 *  Sécurisation des entrées utilisateurs dans les formulaires
 */

class Security
{
    public const COOKIE_NAME = "timers";

    public static function secureHTML($text)
    {
        return htmlspecialchars($text);
    }

    public static function genererCookieConnexion()
    {
        $ticket = session_id() . microtime() . rand(0, 999999);
        $ticket = hash("sha512", $ticket);
        setcookie(self::COOKIE_NAME, $ticket, time() + (3600));
        $_SESSION['user_profil'][self::COOKIE_NAME] = $ticket;
    }
    public static function checkCookieConnexion()
    {
        return $_COOKIE[self::COOKIE_NAME] === $_SESSION['user_profil'][self::COOKIE_NAME];
    }
}
