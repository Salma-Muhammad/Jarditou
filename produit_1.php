<?php
include("assets/php/header.php");
// Inclusion de notre bibliothèque de fonctions
include("assets/php/connexion_bdd.php");
// Appel de la fonction de connexion
$db = connexionBase();
$requete = "SELECT * FROM produits ORDER BY pro_id ASC";//Saisie de la requete
$result = $db->query($requete);

verif1($result);
?>

<h1 class="text-center mb-2 mt-2"> Liste des Articles</h1>

<div class="table table-sm mb-1 mt-1"><!--rendre le table responsive pour une taille >=576px-->
    <!--class permet de changer de style du tableau (striped en zebra)-->
    <table class="table table-striped table-bordered">
        <thead>
        <tr id="titre">
            <th scope="col" width="20%">Photos</th>
            <th scope="col">ID</th>
            <th scope="col">Référence</th>
            <th scope="col">Libellé</th>
            <th scope="col">Prix</th>
            <th scope="col">Stock</th>
            <th scope="col">Couleur</th>
            <th scope="col">Ajout</th>
            <th scope="col">Modif</th>
            <th scope="col">Bloqué</th>
        </tr>
        </thead>

<?php while ($row = $result->fetch(PDO::FETCH_OBJ))// Renvoi de l'enregistrement sous forme d'un objet
    { ?>
        <tbody>
        <tr>
            <th scope="row"><img src="assets/img/<?= $row->pro_id?>.<?=$row->pro_photo ?>" alt ="Photos" class="img-fluid" width="200" height="200"></th>
            <td> <?= $row->pro_id ?> </td>
            <td> <?= $row->pro_ref ?></td>
            <td id="libelle"><a href="detail.php?pro_id=<?= $row->pro_id?>"><?= $row->pro_libelle?></a></td>
            <td> <?= $row->pro_prix?> €</td>
            <td> <?= $row->pro_stock ?></td>
            <td> <?= $row->pro_couleur?> </td>
            <td> <?= $row->pro_d_ajout?> </td>
            <td> <?= $row->pro_d_modif?> </td>
            <td> <?= $row->pro_bloque?> </td>
        </tr>
        </tbody>
<?php } ?>

    </table>
</div>

<?php
include("assets/php/footer.php");
?>