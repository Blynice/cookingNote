<?php
require_once("./models/MainManager.model.php");
/**
 * 
 * getPasswordUser
 *  récupère le mot de passe crypté dans la BDD en function du pseudo de l'utilisateur
 * 
 * pswdCheck($pseudo, $pswd)
 *  récupère le mot de passe via getPasswordUser crypté puis le decrypte
 *  avec password_verify puis le compare avec celui entrée par l'utilisateur
 *  
 * getUserInformation
 *  Récupère toutes les informations de l'utilisateur dans la base de données
 */

class UserManager  extends MainManager
{

    //Création du compte
    public function createAccount($pseudo, $firstname, $lastname, $mail, $pswd)
    {
        $req = "INSERT INTO users (pseudo,firstname,lastname, mail, pswd)
        VALUES (:pseudo, :firstname,:lastname, :mail,:pswd)";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":pseudo", $pseudo, PDO::PARAM_STR);
        $stmt->bindValue(":firstname", $firstname, PDO::PARAM_STR);
        $stmt->bindValue(":lastname", $lastname, PDO::PARAM_STR);
        $stmt->bindValue(":mail", $mail, PDO::PARAM_STR);
        $stmt->bindValue(":pswd", $pswd, PDO::PARAM_STR);
        $stmt->execute();
        $isCreate = ($stmt->rowCount() > 0);
        $stmt->closeCursor();
        return $isCreate;
    }
    //Vérification de la disponibilité du login 
    public function pseudoIsAvailable($pseudo)
    {
        $req = "SELECT * FROM users WHERE pseudo = :pseudo";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":pseudo", $pseudo, PDO::PARAM_STR);
        $stmt->execute();
        $isAvailable = ($stmt->rowCount() === 0);
        $stmt->closeCursor();
        return $isAvailable;
    }


    //Récuperation des données utilisateur selon le pseudo
    public function getUserInformation($pseudo)
    {
        $req = "SELECT * FROM users WHERE pseudo = :pseudo";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":pseudo", $pseudo, PDO::PARAM_STR);
        $stmt->execute();
        $datas = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $datas;
    }


    //Récuperation du mot de passe
    public function getPasswordUser($pseudo)
    {
        //$pseudo = html_entity_decode($pseudo);
        $req = "SELECT pswd FROM users WHERE pseudo = :pseudo";
        //On prépare la requête
        $stmt = $this->getBdd()->prepare($req);
        //bind value évite les injections 
        $stmt->bindValue(":pseudo", $pseudo, PDO::PARAM_STR);
        //On exécute la requète
        $stmt->execute();
        //Récupération des données , Fetch ASSOC pour eviter les redondances dans la BDD
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        //Close curseur pour libérer de l'espace mémoire pour les prochaines requètes
        $stmt->closeCursor();
        //On  retourne l'information récupéré dans $result
        return $result['pswd'];
    }

    //Vérifie si le pseudo  et le mot de passe correspondent
    public function  pswdCheck($pseudo, $pswd)
    {
        $pswdDB = $this->getPasswordUser($pseudo);
        return password_verify($pswd, $pswdDB);
    }

    //Mise à jour du profil par l'utilisateur
    public function updateUserProfil($pseudo, $firstname, $lastname, $mail, $pswd)
    {
        $req = 'UPDATE users set
                    pseudo= :pseudo,
                    firstname= :firstname,
                    lastname= :lastname,
                    mail= :mail,
                    pswd =:pswd
                    WHERE pseudo = :pseudo';

        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":pseudo", $pseudo, PDO::PARAM_STR);
        $stmt->bindValue(":firstname", $firstname, PDO::PARAM_STR);
        $stmt->bindValue(":lastname", $lastname, PDO::PARAM_STR);
        $stmt->bindValue(":mail", $mail, PDO::PARAM_STR);
        $stmt->bindValue(":pswd", $pswd, PDO::PARAM_STR);
        $stmt->execute();
        $isUpdate = ($stmt->rowCount() > 0);
        $stmt->closeCursor();
        return $isUpdate;
    }

    //Suppression du compte
    public function deleteAccount($pseudo)
    {
        $req = "DELETE FROM users WHERE pseudo = :pseudo";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":pseudo", $pseudo, PDO::PARAM_STR);
        $stmt->execute();
        $isDelete = ($stmt->rowCount() > 0);
        $stmt->closeCursor();
        return $isDelete;
    }
}
