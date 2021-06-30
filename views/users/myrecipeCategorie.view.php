<main class="container min-height min-height-categorie margin-categorie p-recipe">
    <h1 class="my-4">Mes recettes</h1>
    <a href="<?= URL; ?>creer_recette" class="btn btn-primary btn-lg mt-4 mb-4">Ajouter une recette</a>
    <!--- Lors de la création du compte il n'y a pas de recettes. 
    Quand une recette sera créer elle affichera sur cette page les catégorie
    Le bouton ajouter une recette envoie vers la page création de recette -->
    <div class="row">
        <div class="col-lg-4 col-md-6 mt-3">
            <div class="card bg-dark text-white" style="width: 18rem;">
                <img src="public/assets/img/appetizer.png" class="card-img" alt="apéritif">
                <div class="card-img-overlay">
                    <h5 class="card-title"><a class="text-white" href="aperitifs">Apéritifs</a></h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
            <div class="card bg-dark text-white" style="width: 18rem;">
                <img src="public/assets/img/entrée.png" class="card-img" alt="entrée">
                <div class="card-img-overlay">
                    <h5 class="card-title"><a class="text-white" href="entrees">Entrées</a></h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
            <div class="card bg-dark text-white" style="width: 18rem;">
                <img src="public/assets/img/plat.png" class="card-img" alt="plat">
                <div class="card-img-overlay">
                    <h5 class="card-title"><a class="text-white" href="plats">Plats</a></h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
            <div class="card bg-dark text-white" style="width: 18rem;">
                <img src="public/assets/img/soupe.png" class="card-img" alt="soupe">
                <div class="card-img-overlay">
                    <h5 class="card-title"><a class="text-white" href="soupes">Soupes</a></h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
            <div class="card bg-dark text-white" style="width: 18rem;">
                <img src="public/assets/img/dessert.png" class="card-img" alt="dessert">
                <div class="card-img-overlay">
                    <h5 class="card-title"><a class="text-white" href="desserts">Desserts</a></h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
            <div class="card bg-dark text-white" style="width: 18rem;">
                <img src="public/assets/img/cocktail.png" class="card-img" alt="cocktail">
                <div class="card-img-overlay">
                    <h5 class="card-title"><a class="text-white" href="cocktails">Cocktails</a></h5>
                </div>
            </div>
        </div>
    </div>
</main>