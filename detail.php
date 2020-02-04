<?php
    require "assets/php/header.php";
    // Inclusion de notre bibliothèque de fonctions
    require "assets/php/connexion_bdd.php";

    $db = connexionBase(); // Appel de la fonction de connexion
    $pro_id = $_GET["pro_id"]; // récupération de la variable pro id via l'url
    $requete = "SELECT * FROM produits RIGHT JOIN categories ON cat_id=pro_cat_id WHERE pro_id=".$pro_id;
    $result = $db->query($requete);
    // Renvoi de l'enregistrement sous forme d'un objet
    $produit = $result->fetch(PDO::FETCH_OBJ);

?>
<h1 class="text-center mt-3">Détails du produits</h1>
    <form class="mb-3" action="#" method="POST" >


        <!--ID-->
        <div class="form-group ">
            <label for="pro_id" class="text-info ">ID : </label>
            <input type="text" class="form-control" name="pro_id" value="<?php echo $produit->pro_id; ?>">
        </div>


        <!--Catégorie-->
        <div class="form-group ">
            <label for="categorie" class="text-info ">Catégorie du produit : </label>
            <input name="pro_cat" class="form-control" value="<?php echo $produit->cat_id." - ".$produit->cat_nom; ?>">
        </div>


        <!--Références-->
        <div class="form-group">
            <label for="pro_ref" class="text-info ">Référence du produit : </label>
            <input type="text" class="form-control" name="pro_ref" value="<?php echo $produit->pro_ref; ?>" >
        </div>


        <!--Libellé du produit-->
        <div class="form-group">
            <label for="pro_libelle" class="text-info ">Libellé du produit : </label>
            <input type="text" class="form-control" name="pro_libelle" value="<?php echo $produit->pro_libelle; ?>" ><br>
        </div>


        <!--Description-->
        <div class="form-group">
            <label for="pro_description" class="text-info ">Description du produit : </label>
            <textarea class="form-control" name="pro_description" ><?php echo $produit->pro_description; ?></textarea>
        </div>


        <!--Prix du produit-->
        <div class="form-group">
            <label for="pro_prix" class="text-info ">Prix : </label>
            <input type="text" class="form-control" name="pro_prix" value="<?= $produit->pro_prix; ?> €">
        </div>


        <!--Unité en stock-->
        <div class="form-group">
            <label for="pro_stock" class="text-info ">Nombre d unité en stock : </label>
            <input type="text" class="form-control" name="pro_stock" value="<?= $produit->pro_stock; ?>" >
        </div>


        <!--Couleur-->
        <div class="form-group">
            <label for="pro_couleur" class="text-info ">Couleur : </label>
            <input type="text" class="form-control" name="pro_couleur" value="<?= $produit->pro_couleur; ?>" >
        </div>


        <!--bloque oui ou non-->
        <?php
        if ($produit->pro_bloque == 1){?>
        <div class="form-group">
        <label class="text-info "  for="info" id="radio">Bloquer le produit à la vente : </label>
        <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="bloque" id="bloque1" value="Oui"checked>
                <label class="form-check-label" for="bloque1">Oui</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="bloque" id="bloque0" value="Non">
                <label class="form-check-label" for="bloque0">Non</label>
            </div>
        </div>

        <?php }else{?>

        <div class="form-group">
        <label class="text-info "  for="info" id="radio">Bloquer le produit à la vente : </label>
        <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="bloque" id="bloque1" value="Oui">
                <label class="form-check-label" for="bloque1">Oui</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="bloque" id="bloque0"  value="Non" checked>
                <label class="form-check-label" for="bloque0">Non</label>
            </div>
        </div><br>
        <?php } ?>


        <!--Date-->
        <div class="form-group">
            <label for ="date_ajout" class="text-info">Date d'ajout : </label>
            <input type ="date" class="form-control col-2" name="date_ajout" value="<?php echo $produit->pro_d_ajout; ?>"><br>
            <label for ="date_modif" class="text-info">Date de modification : </label>
            <input type ="datetime-local" class="form-control col-2" name="date_modif" value="<?php echo $produit->pro_d_modif; ?>">
        </div>


        <!--Boutton Modifier-->
        <div class="form-group text-center">
            <input type="submit" value="Modifier" class='col-lg-1 btn btn-outline-success center-block' id="Modifier">
            <input type="reset" value="Retour" class='col-lg-1 btn btn-outline-warning' action="indexb.php">
        </div>
    </form>

<?php
require "assets/php/footer.php";
?>