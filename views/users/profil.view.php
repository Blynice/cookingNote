<div class="container mb-4">
    <h1 class="my-4">Mes informations personnelles</h1>
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <form method="POST" action="<?= URL; ?>editUserProfil">
                <div class="form-group">
                    <label class="label-size" for="pseudo">Pseudo</label>
                    <input type="text" class="form-control" name="pseudo" value="<?= $userInfo['pseudo'] ?>">
                </div>
                <div class="form-group">
                    <label class="label-size" for="firstname">Mon prénom</label>
                    <input type="text" class="form-control" name="firstname" value="<?= $userInfo['firstname'] ?>">
                </div>
                <div class="form-group">
                    <label class="label-size" for="name">Mon nom</label>
                    <input type="text" class="form-control" name="lastname" value="<?= $userInfo['lastname'] ?>">
                </div>

                <div class="form-group">
                    <label class="label-size" for="mail">Mon email</label>
                    <input type="mail" class="form-control" name="mail" value="<?= $userInfo['mail'] ?>">
                </div>
                <div class="form-group">
                    <label class="label-size" for="pswd">Mon mot de passe</label>
                    <input type="password" class="form-control" name="pswd" value="<?= $userInfo['pswd'] ?>">
                </div>
                <div class="row mt-4">
                    <div class="col-lg-4 col-4 mb-btn">
                        <button type="button" class="btn btn-primary shadow-sm" data-toggle="modal" data-target="#update">Modifier</button>
                    </div>
                    <div class="col-lg-8 col-10">
                        <a type="submit" class="btn btn-outline-danger" href="deleteAccount">Supprimer mon compte</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="update" tabindex="-1" aria-labelledby="update" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateTitle">Modifier mes informations</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= URL; ?>editUserProfil">
                    <div class="form-group">
                        <label class="label-size" for="pseudo">Pseudo</label>
                        <input type="text" class="form-control" name="pseudo" value="<?= $userInfo['pseudo'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="label-size" for="firstname">Mon prénom</label>
                        <input type="text" class="form-control" name="firstname" value="<?= $userInfo['firstname'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="label-size" for="name">Mon nom</label>
                        <input type="text" class="form-control" name="lastname" value="<?= $userInfo['lastname'] ?>">
                    </div>

                    <div class="form-group">
                        <label class="label-size" for="mail">Mon email</label>
                        <input type="mail" class="form-control" name="mail" value="<?= $userInfo['mail'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="label-size" for="pswd">Mon mot de passe</label>
                        <input type="password" class="form-control" name="pswd" value="<?= $userInfo['pswd'] ?>">
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary shadow-sm" type="submit">Sauvegarder</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>