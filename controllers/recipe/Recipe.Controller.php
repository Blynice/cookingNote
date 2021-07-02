<?php

require_once("./controllers/MainController.controller.php");
require_once("./models/recipe/Recipe.Model.php");


class RecipeController extends MainController
{

    private  $recipeManager;

    public function __construct()
    {
        $this->RecipeManager = new RecipeManager();
    }

    /*public function register_recipe($recipeName, $fkCategorieID, $recipeTime, $cookingTime, $recipeNbPeople, $ingredientName, $quantity, $unityMeasure, $stepRecipe)
    {
        var_dump($_POST);
        $recipeName = htmlspecialchars($_POST['recipeName']);
        $fkCategorieID = htmlspecialchars($_POST['categorie']);
        $recipeTime = htmlspecialchars($_POST['recipeTime']);
        $cookingTime = htmlspecialchars($_POST['cookingTime']);
        $recipeNbPeople = htmlspecialchars($_POST['recipeNbPeople']);
        $cookingTime = htmlspecialchars($_POST['cookingTime']);
        $ingredientName = htmlspecialchars($_POST['ingredientName']);
        $quantity = htmlspecialchars($_POST['quantity']);
        $unityMeasure = htmlspecialchars($_POST['unityMeasure']);
        $stepRecipe = htmlspecialchars($_POST['stepRecipe']);

        if ($this->RecipeManager->createRecipe($recipeName, $fkCategorieID, $recipeTime, $cookingTime, $recipeNbPeople, $ingredientName, $quantity, $unityMeasure, $stepRecipe)) {


            Tools::alertMessage('<p class="text-center">Recette créé avec succés !</p>', Tools::SUCCESS_ALERT);
            header("Location: " . URL . "recette");
        } else {
            Tools::alertMessage('<p class="text-center">Erreur lors de la création de la recette, recommencez !</p>', Tools::DANGER_ALERT);
            header("Location: " . URL . "creer_recette");
        }
    }
*/
    public function createRecipe()
    {
        $data_page = [
            "page_title" =>  "Ajouter une recette",
            "page_description" => "Formulaire de création de recette",
            "view" => "views/recipe/formrecipe.view.php",
            "template" => "views/common/template.php"
        ];
        $this->generatePage($data_page);
    }

    public function chrono()
    {
        $data_page = [
            "page_title" =>  "Minuteur",
            "page_description" => "minuteur pour cuisiner",
            "page_javascript" => ["chrono.js"],
            "view" => "views/users/chrono.view.php",
            "template" => "views/common/template.php"
        ];
        $this->generatePage($data_page);
    }

    /*********** Apéritifs ************ */
    public function aperitif()
    {

        $data_page = [
            "page_title" =>  "Apéritifs",
            "page_description" => "Catégorie apéritifs",
            "view" => "views/recipe/categorie-aperitif.view.php",
            "template" => "views/common/template.php"
        ];
        $this->generatePage($data_page);
    }

    // Faire une seule function (supprimer getRecipe) et générer les cards avec un foreach ou while
    public function recipeAperitif()
    {
        $data_page = [
            "page_title" =>  "Mes recettes apéritives",
            "page_description" => "Mes recettes apéritifs",
            "view" => "views/recipe/recipe-aperitif.view.php",
            "template" => "views/common/template.php"
        ];
        $this->generatePage($data_page);
    }


    /******************* Entrées ***************/
    public function entree()
    {
        $data_page = [
            "page_title" =>  "Entrées",
            "page_description" => "Catégorie entrée",
            "view" => "views/recipe/categorie-entree.view.php",
            "template" => "views/common/template.php"
        ];
        $this->generatePage($data_page);
    }

    public function recipeEntree()
    {
        $data_page = [
            "page_title" =>  "Mes recettes entrées",
            "page_description" => "Mes recettes entrées",
            "view" => "views/recipe/recipe-entree.view.php",
            "template" => "views/common/template.php"
        ];
        $this->generatePage($data_page);
    }


    /******************** Plats ****************/
    public function plat()
    {
        $data_page = [
            "page_title" =>  "Plats",
            "page_description" => "Catégorie plat",
            "view" => "views/recipe/categorie-plat.view.php",
            "template" => "views/common/template.php"
        ];
        $this->generatePage($data_page);
    }

    public function recipePlat()
    {


        $data_page = [
            "page_title" =>  "Mes recettes plats",
            "page_description" => "Mes recettes plats",
            "view" => "views/recipe/recipe-plat.view.php",
            "template" => "views/common/template.php"
        ];
        $this->generatePage($data_page);
    }

    /********************* Soupes *******************/
    public function soupe()
    {
        $data_page = [
            "page_title" =>  "Soupes",
            "page_description" => "Catégorie soupe",
            "view" => "views/recipe/categorie-soupe.view.php",
            "template" => "views/common/template.php"
        ];
        $this->generatePage($data_page);
    }

    public function recipeSoupe()
    {

        $data_page = [
            "page_title" =>  "Mes recettes soupes",
            "page_description" => "Mes recettes soupes",
            "view" => "views/recipe/recipe-soupe.view.php",
            "template" => "views/common/template.php"
        ];
        $this->generatePage($data_page);
    }

    /******************* Desserts ****************/
    public function dessert()
    {
        $data_page = [
            "page_title" =>  "Desserts",
            "page_description" => "Catégorie dessert",
            "view" => "views/recipe/categorie-dessert.view.php",
            "template" => "views/common/template.php"
        ];
        $this->generatePage($data_page);
    }

    public function recipeDessert()
    {
        $data_page = [
            "page_title" =>  "Mes recettes desserts",
            "page_description" => "Mes recettes desserts",
            "view" => "views/recipe/recipe-dessert.view.php",
            "template" => "views/common/template.php"
        ];
        $this->generatePage($data_page);
    }
    /******************** Cocktails **************/
    public function cocktail()
    {
        $data_page = [
            "page_title" =>  "Cocktails",
            "page_description" => "Catégorie cocktail",
            "view" => "views/recipe/categorie-cocktail.view.php",
            "template" => "views/common/template.php"
        ];
        $this->generatePage($data_page);
    }

    public function recipeCocktail()
    {
        $data_page = [
            "page_title" =>  "Mes recettes cocktails",
            "page_description" => "Mes recettes cocktails",
            "view" => "views/recipe/recipe-cocktail.view.php",
            "template" => "views/common/template.php"
        ];
        $this->generatePage($data_page);
    }


    public function errorPage($msg)
    {
        parent::errorPage($msg);
    }
}
