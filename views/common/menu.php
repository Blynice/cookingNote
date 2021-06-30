<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a href="home" class="navbar-brand">Cooking Note</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav nav-pills">
            <?php if (empty($_SESSION['user_profil'])) :
            ?>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= URL; ?>home">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL; ?>login">Connexion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL; ?>register">Inscription</a>
                </li>
            <?php endif;
            ?>

            <?php if (!empty($_SESSION['user_profil'])) :
            ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL; ?>recette">Mes recettes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL; ?>creer_recette">Créer recette</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL; ?>minuteur">Minuteur</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL; ?>profil">Mon profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout">Déconnexion</a>
                </li>
            <?php endif;
            ?>
        </ul>
    </div>
</nav>