<div class="container border-cooking">
    <h1 class="text-center">Inscription</h1>
    <form class="offset-4" method="POST" action="register_validation">

        <div class="form-group col-md-6">
            <label class="label-size" for="pseudo">Pseudo</label>
            <input type="text" class="form-control" name="pseudo" id="pseudo" minlength="4" maxlength="15" pattern="^[a-zA-ZÀ-Z0-9-_\.]{1,20}$" required />
        </div>
        <div class="form-group col-md-6">
            <label class="label-size" for="firstname">Prénom</label>
            <input type="text" class="form-control" name="firstname" id="firstname" minlength="4" maxlength="15" pattern="^[a-zA-ZÀ-Z0-9-_\.]{1,20}$" required />
        </div>
        <div class="form-group col-md-6">
            <label class="label-size" for="name">Nom</label>
            <input type="text" class="form-control" name="lastname" id="lastname" minlength="4" maxlength="20" pattern="^[a-zA-ZÀ-Z0-9-_\.]{1,20}$" required />
        </div>
        <div class="form-group col-md-6">
            <label class="label-size" for="mail">Mail</label>
            <input type="mail" class="form-control" name="mail" id="mail" required />
        </div>
        <div class="form-group col-md-6">
            <label class="label-size" for="password">Mot de passe</label>
            <input type="password" class="form-control" name="pswd" id="pswd" minlength="4" required />
        </div>
        <div class="mt-4">
            <button type="submit" class="btn btn-primary ml-4">S'inscrire</button>
            <a type="button" class="btn btn-secondary" href="<?= URL; ?>home">Fermer</a>
        </div>
    </form>
</div>