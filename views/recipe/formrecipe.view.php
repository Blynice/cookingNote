<main class="container py-3">
    <h1 class="my-4 text-center">Ajouter une recette</h1>
    <div class="row">
        <div class="col-lg-6 bg-light py-3">
            <form action="<?= URL ?>register_recipe" method="POST" enctype="multipart/form-data">
                <div class="border mb-4 py-3">
                    <label for="avatar">Choisir une image:</label>
                    <input type="file" id="img_link" name="img_link" capture="user" accept="image/png, image/jpeg" onchange="submit();">
                </div>

                <div class="form-group my-3">
                    <label class="label-size" for="recipeName">Nom de la recette</label>
                    <input type="text" class="form-control" name="recipeName" id="recipeName" placeholder="Nom de la recette">
                </div>
                <div class="form-group my-3">
                    <label class="label-size" for="categorie">Catégorie</label>
                    <select class="form-control col-lg-4" name="categorie" id="categorie">
                        <option value="1">Apéritifs</option>
                        <option value="2">Entrées</option>
                        <option value="3">Plats</option>
                        <option value="4">Soupes</option>
                        <option value="5">Desserts</option>
                        <option value="6">Cocktails</option>

                    </select>
                </div>
                <div class="form-group my-3">
                    <label class="label-size" for="recipeNbPeople">Nombre de personnes</label>
                    <input type="text" class="form-control" name="recipeNbPeople" id="recipeNbPeople" placeholder="ex: 4">
                </div>
                <div class="form-group my-3">
                    <label class="label-size" for="recipeTime">Temps de préparation</label>
                    <input type="text" class="form-control" name="recipeTime" id="recipeTime" placeholder="ex: 30mn">
                </div>
                <div class="form-group my-3">
                    <label class="label-size" for="cookingTime">Temps de cuisson</label>
                    <input type="text" class="form-control" name="cookingTime" id="cookingTime" placeholder="ex: 20mn">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="label-size" for="ingredientName">Ingrédient</label>
                        <input class="form-control" name="ingredientName" id="ingredientName">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="label-size" for="quantity">Quantité</label>
                        <input class="form-control" name="quantity" id="quantity">
                    </div>
                    <div class="form-group col-md-2">
                        <label class="label-size" for="unityMeasure">Mesure</label>
                        <input class="form-control" name="unityMeasure" id="unityMeasure">
                    </div>
                </div>
                <div class="form-group">
                    <label class="label-size" for="stepRecipe">Ajouter étape</label>
                    <textarea class="form-control" name="stepRecipe" id="stepRecipe" rows="1"></textarea>
                </div>
                <button type="submit" class="btn btn-primary ml-4">Ajouter</button>
                <input class="btn btn-outline-danger float-md-none float-right ml-4" type="submit" value="Effacer">
            </form>
        </div>
        <div class="col-lg-4">
            <div class="formrecipe_view"></div>
        </div>
    </div>
</main>