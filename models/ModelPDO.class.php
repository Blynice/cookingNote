<?php

/**
 * @ModelPDO
 * 
 *  Appelle la BDD
 *  Se connecte à la BDD
 * 
 */
abstract class ModelPDO
{
    private static $pdo;

    private static function setBdd()
    {
        try {
            self::$pdo = new PDO("mysql:host=localhost;dbname=cookingnote;charset=utf8", "root", "");
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Échec de la connexion : ' . $e->getMessage();
            exit;
        }
    }

    //  si aucune instance de pdo n'existe alors il l'a crée en appelant getBDD() 
    protected function getBdd()
    {
        if (self::$pdo === null) {
            self::setBdd();
        }
        return self::$pdo;
    }
}
