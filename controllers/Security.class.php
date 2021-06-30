<?php

/**
 * @Security
 *  Sécurisation des entrées utilisateurs dans les formulaires
 */

class Security
{
    public static function secureHTML($text)
    {
        return htmlspecialchars($text);
    }
}
