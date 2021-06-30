<?php

require_once './controllers/MainController.controller.php';
require_once './models/users/User.Model.php';

/**
 * 
 *@ User.Controller
 */

class UserController extends MainController
{

    private  $userManager;

    public function __construct()
    {
        $this->userManager = new UserManager();
    }

    //Inscription user
    public function register_validation($pseudo, $firstname, $lastname, $mail, $pswd)
    {
        if ($this->userManager->pseudoIsAvailable($pseudo)) {
            $passwordCrypte = password_hash($pswd, PASSWORD_DEFAULT);

            if ($this->userManager->createAccount($pseudo, $firstname, $lastname, $mail, $passwordCrypte)) {
                Tools::alertMessage(
                    '<p class="text-center">La compte a été créé avec succés !</p>',
                    Tools::SUCCESS_ALERT
                );
                header("Location: " . URL . "login");
            } else {
                Tools::alertMessage(
                    '<p class="text-center">Erreur lors de la création du compte</p>',
                    Tools::DANGER_ALERT
                );
                header("Location: " . URL . "register");
            }
        } else {
            Tools::alertMessage(
                '<p class="text-center">Le login est déjà utilisé !</p>',
                Tools::DANGER_ALERT
            );
            header("Location: " . URL . "register");
        }
    }

    //Login User
    public function login_validation($pseudo, $pswd)
    {
        if ($this->userManager->pswdCheck($pseudo, $pswd)) {
            Tools::alertMessage(
                '<h3 class="text-center text-dark"> Bienvenue  ' . $pseudo . ' !</h3>',
                Tools::SUCCESS_ALERT
            );
            header("location:" . URL . "recette");

            $_SESSION['user_profil'] = [
                "pseudo" => $pseudo,
                "pswd" => $pswd,
            ];
        } else {
            Tools::alertMessage(
                '<p class="text-center">Combinaison pseudo / mot de passe invalide</p>',
                Tools::DANGER_ALERT
            );
            header("Location:" . URL . "home.view.php");
        }
    }

    //affichage des informations de l'utilisateur
    public function profil()
    {
        $pseudo = $_SESSION['user_profil']['pseudo'];
        $datas = $this->userManager->getUserInformation($pseudo);
        $data_page = [
            "page_description" => "Page de profil",
            "page_title" => "Page de profil",
            "userInfo" => $datas,
            "view" => "views/users/profil.view.php",
            "template" => "views/common/template.php"
        ];
        $this->generatePage($data_page);
    }

    //Mise à jour du profil utilisateur
    public function editUserProfil($pseudo, $firstname, $lastname, $mail, $pswd)
    {
        $passwordCrypte = password_hash($pswd, PASSWORD_DEFAULT);
        //if ($this->userManager->pseudoIsAvailable($pseudo)) {
        if ($this->userManager->updateUserProfil($pseudo, $firstname, $lastname, $mail, $passwordCrypte)) {
            Tools::alertMessage(
                '<p class="text-center">La modification a été prise en compte</p>',
                Tools::SUCCESS_ALERT
            );
            header("Location: " . URL . "profil");
        } else {
            Tools::alertMessage(
                '<p class="text-center">Aucune modification effectuée</p>',
                Tools::DANGER_ALERT
            );
            header("Location: " . URL . "profil");
        }
        /*} else {
            Tools::alertMessage(
                '<p class="text-center">Ce pseudo est déjà utilisé</p>',
                Tools::DANGER_ALERT
            );
            header("Location: " . URL . "profil");
        }*/
    }

    //Génération de la vue suppression de compte
    public function deleteMyAccount()
    {
        $data_page = [
            "page_title" =>  "Supprimer mon compte",
            "page_description" => "Suppression de mon compte",
            "view" => "views/users/delete.view.php",
            "template" => "views/common/template.php"
        ];
        $this->generatePage($data_page);
    }

    //Suppression de compte
    public function deleteUser()
    {
        if ($this->userManager->deleteAccount($_SESSION['user_profil']['pseudo'])) {
            Tools::alertMessage(
                '<p class="text-center">La suppression du compte est effectuée </p>',
                Tools::SUCCESS_ALERT
            );
            unset($_SESSION['user_profil']);
            header("Location: " . URL . "home");
        } else {
            Tools::alertMessage(
                '<p class="text-center">La suppression n a pas été effectuée</p>',
                Tools::DANGER_ALERT
            );
            header("Location: " . URL . "profil");
        }
    }

    //Deconnexion
    public function logout()
    {
        Tools::alertMessage(
            '<p class="text-center">Vous êtes déconnectez</p>',
            Tools::SUCCESS_ALERT
        );
        unset($_SESSION['user_profil']);
        header("Location: " . URL . "home");
    }


    // Affichage des catégories de recettes à la connexion de l'utilisateur
    public function myRecipe()
    {
        $data_page = [
            "page_title" =>  "Mes recettes",
            "page_description" => "mon carnet de recette",
            "view" => "views/users/myrecipeCategorie.view.php",
            "template" => "views/common/template.php"
        ];
        $this->generatePage($data_page);
    }

    public function errorPage($msg)
    {
        parent::errorPage($msg);
    }
}
