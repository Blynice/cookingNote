<?php
session_start();
//var_dump($_SESSION);

define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") .
    "://" . $_SERVER['HTTP_HOST'] . $_SERVER["PHP_SELF"]));

require_once("./controllers/visitor/Visitor.Controller.php");
require_once("./controllers/users/User.Controller.php");
require_once("./controllers/recipe/Recipe.Controller.php");
require_once("./controllers/Tools.class.php");
require_once("./controllers/Security.class.php");

$visitorController = new VisitorController();
$userController = new UserController();
$RecipeController = new RecipeController();

try {

    if (empty($_GET['page'])) {
        $page = "home";
    } else {

        $url = explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL));
        $page = $url[0];
    }

    switch ($page) {
        case "home":
            $visitorController->home();
            break;
        case "login":
            $visitorController->login();
            break;
        case "login_validation":
            if (!empty($_POST['pseudo']) && !empty($_POST['pswd'])) {
                $pseudo = Security::secureHTML($_POST['pseudo']);
                $pswd = Security::secureHTML($_POST['pswd']);
                var_dump($pseudo);
                var_dump($pswd);
                $userController->login_validation($pseudo, $pswd);
            } else {
                Tools::alertMessage(
                    "Pseudo ou mot de passe non renseigné",
                    Tools::DANGER_ALERT
                );
                header("Location:" . URL . "login");
            }
            break;

        case "register":
            $visitorController->register();
            break;
        case "register_validation":
            if (
                !empty($_POST['pseudo']) && !empty($_POST['firstname']) && !empty($_POST['lastname'])
                && !empty($_POST['mail']) && filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) && !empty($_POST['pswd'])
            ) {
                $pseudo = Security::secureHTML($_POST['pseudo']);
                $firstname = Security::secureHTML($_POST['firstname']);
                $lastname = Security::secureHTML($_POST['lastname']);
                $mail = Security::secureHTML($_POST['mail']);
                $pswd = Security::secureHTML($_POST['pswd']);
                $userController->register_validation($pseudo, $firstname, $lastname, $mail, $pswd);
            } else {
                Tools::alertMessage(
                    "Vous n'avez pas rempli entièrement le formulaire !",
                    Tools::DANGER_ALERT
                );
                header("Location: " . URL . "register");
            }
            break;
        case "logout":
            $userController->logout();
            break;

        case "editUserProfil":
            if (
                isset($_POST['pseudo']) || isset($_POST['firstname']) || isset($_POST['lastname']) ||
                isset($_POST['mail']) || isset($_POST['pswd'])
            ) {
                $pseudo = Security::secureHTML($_POST['pseudo']);
                $firstname = Security::secureHTML($_POST['firstname']);
                $lastname = Security::secureHTML($_POST['lastname']);
                $mail =  Security::secureHTML($_POST['mail']);
                $mail = filter_var($_POST['mail']);
                $pswd = Security::secureHTML($_POST['pswd']);
                $userController->editUserProfil($pseudo, $firstname, $lastname, $mail, $pswd);
            } else {
                Tools::alertMessage("Erreur lors de la modification", Tools::DANGER_ALERT);
                header("Location: " . URL . "profil");
            }
            break;

        case "deleteAccount":
            $userController->deleteMyAccount();
            break;
        case "ValidationDeleteAccount":
            $userController->deleteUser();
            break;
        case "recette":
            $userController->myRecipe();
            break;

            /*case "register_recipe":
            $recipeName = Security::secureHTML($_POST['recipeName']);
            $fkCategorieID = Security::secureHTML($_POST['categorie']);
            $recipeTime = Security::secureHTML($_POST['recipeTime']);
            $cookingTime = Security::secureHTML($_POST['cookingTime']);
            $recipeNbPeople = Security::secureHTML($_POST['recipeNbPeople']);
            $cookingTime = Security::secureHTML($_POST['cookingTime']);
            $ingredientName = Security::secureHTML($_POST['ingredientName']);
            $quantity = Security::secureHTML($_POST['quantity']);
            $unityMeasure = Security::secureHTML($_POST['unityMeasure']);
            $stepRecipe = Security::secureHTML($_POST['stepRecipe']);

            $RecipeController->register_recipe($recipeName, $fkCategorieID, $recipeTime, $cookingTime, $recipeNbPeople, $ingredientName, $quantity, $unityMeasure, $stepRecipe);
            break;
*/
        case "creer_recette":
            $RecipeController->createRecipe();
            break;

        case "minuteur":
            $RecipeController->chrono();
            break;
        case "profil":
            $userController->profil();
            break;

        case "aperitifs":
            $RecipeController->aperitif();
            break;
        case "aperitif_recette":
            $RecipeController->recipeAperitif();
            break;

        case "entrees":
            $RecipeController->entree();
            break;
        case "recette_entrees":
            $RecipeController->recipeEntree();
            break;

        case "plats":
            $RecipeController->plat();
            break;
        case "recette_plats":
            $RecipeController->recipePlat($_SESSION['IDrecette']);
            break;

        case "soupes":
            $RecipeController->soupe();
            break;
        case "recette_soupes":
            $RecipeController->recipeSoupe($_SESSION['IDrecette']);
            break;

        case "desserts":
            $RecipeController->dessert();
            break;
        case "recette_desserts":
            $RecipeController->recipeDessert($_SESSION['IDrecette']);
            break;


        case "cocktails":
            $RecipeController->cocktail();
            break;
        case "recette_cocktails":
            $RecipeController->recipeCocktail($_SESSION['IDrecette']);
            break;

        case "error301":
        case "error302":
        case "error400":
        case "error401":
        case "error402":
        case "error405":
        case "error500":
        case "error505":
            throw new Exception("Error de type : " . $page);
            break;
        case "error403":
            throw new Exception("vous n'avez pas le droit d'accéder à ce dossier");
            break;
        case "error404":
        default:
            throw new Exception("La page n'existe pas");
    }
} catch (Exception $e) {
    $title = "Error";
    $description = "Page de gestion des erreurs";
    $visitorController->errorPage($e->getMessage());
}
