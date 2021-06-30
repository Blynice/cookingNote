<?php
require_once("./models/MainManager.model.php");

class RecipeManager  extends MainManager
{

    /*public function getRecipe($fkcategorieID, $categorieID)
    {
        $req = "SELECT * FROM recipe r INNER JOIN categorie c
        ON  r.fkcategorieID = c.categorieID";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":fkcategorieID", $fkcategorieID, PDO::PARAM_INT);
        $stmt->bindValue(":categorieID", $categorieID, PDO::PARAM_INT);
        $stmt->execute();
        $recipe = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $recipe;
        var_dump($recipe);
    }

    public function getRecipeAperitif($fkcategorieID)
    {
        $req = "SELECT * FROM recipe WHERE fkcategorieID = 1";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":fkcategorieID", $fkcategorieID, PDO::PARAM_INT);
        $stmt->execute();
        $recipe = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $recipe;
    }
    public function getRecipeEntree()
    {
        $req = "SELECT * FROM recipe WHERE fkcategorieID = 2";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->execute();
        $recipe = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $recipe;
        var_dump($recipe);
    }

    public function createRecipe($recipeName, $fkcategorieID, $recipeTime, $cookingTime, $recipeNbPeople, $ingredientName, $quantity, $unityMeasure, $stepRecipe)
    {
        $req = "INSERT INTO recipe (recipeName,fkcategorieID,recipeNbPeople,recipeTime,cookingTime,ingredientName,quantity,unityMeasure,stepRecipe)
        VALUES (:recipeName,:fkcategorieID,:recipeNbPeople,:recipeTime,:cookingTime,:ingredientName,:quantity,:unityMeasure,:stepRecipe)";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":recipeName", $recipeName, PDO::PARAM_STR);
        $stmt->bindValue(":fkcategorieID", $fkcategorieID, PDO::PARAM_INT);
        $stmt->bindValue(":recipeTime", $recipeTime, PDO::PARAM_STR);
        $stmt->bindValue(":cookingTime", $cookingTime, PDO::PARAM_STR);
        $stmt->bindValue(":recipeNbPeople", $recipeNbPeople, PDO::PARAM_INT);
        $stmt->bindValue(":ingredientName", $ingredientName, PDO::PARAM_STR);
        $stmt->bindValue(":quantity", $quantity, PDO::PARAM_INT);
        $stmt->bindValue(":unityMeasure", $unityMeasure, PDO::PARAM_STR);
        $stmt->bindValue(":stepRecipe", $stepRecipe, PDO::PARAM_STR);
        $stmt->execute();
        $isCreate = ($stmt->rowCount() > 0);
        $stmt->closeCursor();
        return $isCreate;
    }
    */
}
