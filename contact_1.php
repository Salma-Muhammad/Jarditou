<?php
include("assets/php/header.php");
?>

<!------Coordonnées-------->
<h5 class="text-danger">*Ces zones sont obligatoire</h5>
<form action="contact.php" method="GET" id="myform">
    <legend> Vos coordonnées </legend>
    <div class="form-group row">
        <label for="nom" class="col-lg-2 col-md-2">Votre Nom* : </label>
        <div class="col-lg-4 col-md-4 ">
            <input id="nom" type="text" name="nom" class="form-control" placeholder="DUPONT">
            <span id="errorName"></span>
        </div>

        <label for="prenom" class="col-lg-2 col-md-2">Votre prénom* : </label>
        <div class="col-lg-4 col-md-4">
            <input id="prenom" type="text" name="prenom" class="form-control" placeholder="Pierre">
            <span id="errorPrenom"></span>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-lg-2 col-md-2">Sexe*:</label>
        <div class="col-lg-4 col-md-4">
            <div class="form-check form-check-inline">
                <input type="radio" id="female" name="sexe" value="feminin" class="form-check-input">
                <label class="form-check-label" for="feminin"> Féminin </label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" id="male" name="sexe" value="masculin" class="form-check-input">
                <label class="form-check-label" for="masculin"> Masculin</label>
            </div>
            <span id="error"></span>
        </div>
        <label for="ddn" class="col-lg-2 col-md-2">Date de naissance* : </label>
        <div class="col-lg-4 col-md-4 ">
            <input id="date" type="text" name="ddn" class="form-control">
            <span id="errorDate"></span>
        </div>
    </div>

    <div class="form-group row">
        <label for="adresse" class="col-lg-2 col-md-2">Adresse : </label>
        <div class="col-lg-4 col-md-4 ">
            <input type="text" id="adresse" name="adresse" class="form-control">
            <span id="errorAdresse"></span>
        </div>

        <label for="cdp" class="col-lg-2 col-md-2">Code postal : </label>
        <div class="col-lg-4 col-md-4 ">
            <input type="text" id="cp" name="cp" class="form-control">
            <span id="errorCode"></span>
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-lg-2 col-md-2">Email* :</label>
        <div class="col-lg-4 col-md-4 ">
            <input type="email" name="email" id="email" class="form-control"
                placeholder="Saisissez votre adresse mail">
            <span id="errorEmail"></span>
        </div>

        <label for="ville" class="col-lg-2 col-md-2">Ville : </label>
        <div class="col-lg-4 col-md-4 ">
            <input type="text" name="ville" class="form-control">
        </div>
    </div>

    <!--------Votre demande -------->
    <legend>Votre demande</legend>
    <div class="form-group row">
        <label for="sujet" class="col-lg-2 col-md-2">Sujet*:</label>
        <div class="col-lg-4 col-md-4 ">
            <select name="demande" size="1" class="custom-select" id="demande">
                <option selected>Sélectionnez une option</option>
                <option value="commande">Mes commandes </option>
                <option value="produit">Question sur un produit</option>
                <option value="reclamation">Réclamation</option>
                <option value="autres">Autres</option>
            </select>
            <span id="errorDemande"></span>
        </div>
    </div>
    <div class="form-group row">
        <label for="message" class="col-lg-2 col-md-2">Votre message* : </label>
        <div class="col-lg-4 col-md-4 ">
            <textarea class="form-control" name="messsage" id="message" rows="3"></textarea>
            <span id="errorMessage"></span>
        </div>
    </div>
    <div class="form-group col-lg-8">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox" id="checkbox">
            <label class="form-check-label">J'accepte le traitement informatique de ce formulaire.*</label>
            <span id="errorCheckbox"></span>
        </div>
    </div>
    <button class="btn btn-success btn-sm" type="submit" value="Envoyer"> Envoyer</button>
    <button class="btn btn-secondary btn-sm" type="reset" value="Annuler"> Annuler </button>
</form>

<?php
include("assets/php/footer.php");
?>

