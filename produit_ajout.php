<?php
require("assets/php/header.php");
// Inclusion de notre bibliothèque de fonctions
require("assets/php/connexion_bdd.php");
// Appel de la fonction de connexion
$db = connexionBase();

?>

<body>
<h1 class="text-center mt-3">Formulaire pour ajouter un produit</h1>
    <form class="mb-3" action="produit_ajout_script.php" method="POST" >


        <!--ID-->
        <div class="form-group row">
            <label for="pro_id" class="text-info ">ID : </label>
            <input type="text" class="form-control" name="pro_id">


        <!--Catégorie-->
            <label for="categorie" class="text-info ">Catégorie du produit : </label>
            <select name="pro_cat" class="form-control">
                <option>Choisissez la catégorie du produit</option>
                <?php
                $requeteRef ='SELECT DISTINCT cat_nom, cat_id FROM categories Left JOIN produits ON cat_id=pro_cat_id';
                $resultat = $db->query($requeteRef);
                while($categorie=$resultat->fetch(PDO::FETCH_OBJ)){?>

                <option value="<?=$categorie->cat_nom?>"><?=$categorie->cat_id." - ".$categorie->cat_nom?></option>
                <?php } ?>
            </select>
        </div><br>


        <!--Références-->
        <div class="form-group">
            <label for="pro_ref" class="text-info ">Référence du produit : </label>
            <input type="text" class="form-control" name="pro_ref" >
        </div>


        <!--Libellé du produit-->
        <div class="form-group">
            <label for="pro_libelle" class="text-info ">Libellé du produit : </label>
            <input type="text" class="form-control" name="pro_libelle" ><br>
        </div>


        <!--Description-->
        <div class="form-group">
            <label for="pro_description" class="text-info ">Description du produit : </label>
            <textarea class="form-control" name="pro_description" ></textarea>
        </div>


        <!--Prix du produit-->
        <div class="form-group">
            <label for="pro_prix" class="text-info ">Prix : </label>
            <input type="text" class="form-control" name="pro_prix">
        </div>


        <!--Unité en stock-->
        <div class="form-group">
            <label for="pro_stock" class="text-info ">Nombre d'unité en stock : </label>
            <input type="text" class="form-control" name="pro_stock" >
        </div>


        <!--Couleur-->
        <div class="form-group">
            <label for="pro_couleur" class="text-info ">Couleur : </label>
            <input type="text" class="form-control" name="pro_couleur" ><br>
            <p><?php// form_error('pro_couleur');?>
        </div>


        <!--Photo-->
        <div class="form-group">
            <div class="form-group">
                <label class="text-info" for="photo">Photos : </label>
                <input type="file"  class="form-control-file" name="photo"  id="photo" accept=".jpg,.jpeg,.gif,.png"><br>
            </div>
        </div>


        <!--bloque oui ou non-->
        <div class="form-group">
            <label class="text-info "  for="info" id="radio">Bloquer le produit à la vente : </label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="bloque" value="Oui">
                <label class="form-check-label" for="bloque1">Oui</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="bloque" value="Non">
                <label class="form-check-label" for="bloque0">Non</label>
            </div>
        </div><br>


        <!--Date-->
        <div class="form-group">
            <label for ="date_ajout" class="text-info">Date d'ajout : </label>
            <input type ="date" class="form-control" name="date_ajout" value="<?php //Timezone()?>"><br>
            <label for ="date_modif" class="text-info">Date de modification : </label>
            <input type ="datetime-local" class="form-control" name="date_modif" value="<?php //Timezone()?>">
        </div>


        <!--Boutton Ajouter-->
        <div class="form-group text-center">
            <input type="submit" value="Ajouter" class='col-lg-1 btn btn-outline-success center-block' id="Ajouter">
            <input type="reset" value="Annuler" class='col-lg-1 btn btn-outline-warning'>
        </div>
    </form>
</body>

<?php require("assets/php/footer.php");?>