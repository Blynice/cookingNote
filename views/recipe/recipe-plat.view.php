<main class="container mb-4">
    <a class="btn btn-outline-primary mb-4 mt-4" href="plats">Retour Plats</a>
    <h5 class="text-center"><?= $recipeDatas['recipeName'] ?></h5>
    <img src="<?= $recipeDatas['img_link'] ?>" class="mb-3" width="18rem" alt="photo de la recette">
    <div class="row mt-3">
        <div class="col-lg-12 col-4 text-center"><b>Nombres de personnes:</b></div>
        <div class="col-lg-12  col-4 text-center"><?= $recipeDatas['recipeNbPeople'] ?></div>
    </div>
    <div class="row row-cols-2">
        <div class="col">
            <div class="col-lg-12 col-4 text-center"><b>Préparation:</b>
            </div>
            <div class="col-lg-12 text-center"><?= $recipeDatas['recipeTime'] ?></div>
        </div>
        <div class="col">
            <div class="col-lg-12 text-center"><b>Cuisson:</b></div>
            <div class="col-lg-12 text-center"> <?= $recipeDatas['cookingTime'] ?></div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <h5 class="recipe-title">INGRÉDIENTS</h5>
            <ul class="list-group col-sm-4 mx-auto">
                <li class="list-group-item">
                    <b><?= $recipeDatas['quantity'] ?> <?= $recipeDatas['unityMeasure'] ?></b>
                    <?= $recipeDatas['ingredientName'] ?>
                </li>
                <li class="list-group-item">
                    <b><?= $recipeDatas['quantity'] ?> <?= $recipeDatas['unityMeasure'] ?></b>
                    <?= $recipeDatas['ingredientName'] ?>
                </li>
                <li class="list-group-item">
                    <b><?= $recipeDatas['quantity'] ?> <?= $recipeDatas['unityMeasure'] ?></b>
                    <?= $recipeDatas['ingredientName'] ?>
                </li>
            </ul>
        </div>

    </div>
    <div class="row">
        <div class="col-12">
            <h5 class="recipe-title">PREPARATION</h5>
            <ul class="list-group col-sm-8 mx-auto">
                <li class="list-group-item">
                    <b>ÉTAPE 1:</b>
                    <?= $recipeDatas['stepRecipe'] ?>
                </li>
            </ul>
        </div>
    </div>

    <div class="row mt-3 justify-content-center">
        <div class="col-2">
            <a class="btn btn-primary" href="<?= URL; ?>creer_recette">Modifier</a>
        </div>
        <div class="col-2">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Supprimer</button>
        </div>
    </div>
</main>