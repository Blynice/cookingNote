<main class="container border-cooking">
    <h1 class="text-center">Connexion</h1>
    <div class="offset-4">
        <form method="POST" action="login_validation">

            <div class="form-group col-md-6 col-sm-6">
                <label class="label-size" for="pseudo">Pseudo</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" id="pseudo" name="pseudo" minlength="4" maxlength="15" pattern="^[a-zA-ZÀ-Z0-9-_\.]{1,20}$" required />
            </div>
            <div class="form-group col-md-6 col-sm-6">
                <label class="label-size" for="pswd">Mot de passe</label>
                <input type="password" class="form-control" id="pswd" name="pswd" required />
            </div>
            <div class="mt-4 offset-1">
                <button type="submit" class="btn btn-primary ml-4">Connexion</button>
                <a type="button" class="btn btn-secondary" href="<?= URL; ?>home">Fermer</a>
            </div>
        </form>
    </div>
</main>