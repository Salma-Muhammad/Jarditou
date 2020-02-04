<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atelier 3</title>
</head>
<?php

/*********************************************************
            Connexion à la base de données
 *********************************************************/
function connexionBase()
{
    //declaration des parametre
    $host = "localhost";
    $user = "root";     // Votre loggin d'accès au serveur de BDD
    $password = "";     // Le Password pour vous identifier auprès du serveur
    $bdd = "jarditou";  // La bdd avec laquelle vous voulez travailler

    try
    {
        $db = new PDO('mysql:host='.$host.';charset=utf8;dbname='.$bdd, $user, $password);
    // Ajout d'une option PDO pour gérer les exceptions
        return $db;
        echo "Connexion réussi";
    }
    catch (Exception $e)
    {
        echo 'Erreur : ' . $e->getMessage() . '<br>';
        echo 'N° : ' . $e->getCode();
        die('Connexion au serveur impossible.');
    }
}
$db = connexionBase();



/**********************************************************************
                Construction d'une requête
 **********************************************************************/
$requete = "SELECT * FROM produits WHERE pro_id = 7";
$result = $db->query($requete);
while ($produit = $result->fetch(PDO::FETCH_OBJ))
{
echo $produit->pro_id." – ".$produit->pro_libelle. "<br>";
}
$result->closeCursor();





/**********************************************************************
                affichage du tableau par ID
 **********************************************************************/
// pour éxecuter ce code saisir http://localhost/atelier3.php?pro_id=(id du produit)
$pro_id = $_GET["pro_id"];
$requete = "SELECT * FROM produits WHERE pro_id =".$pro_id;
$result = $db->query($requete);
$produit = $result->fetch(PDO::FETCH_OBJ);
$result->closeCursor();

// fonction de vérification des id inexistant
function verif($produit)
{
    if(!$produit)
    {
        die("ID : ". $_GET["pro_id"]." inexistant");
    }
}
verif($produit);
?>

<!---------tableau html----------->

<table>
<thead>
    <tr id="titre">
        <th scope="col">ID</th>
        <th scope="col">Catégorie</th>
        <th scope="col">Référence</th>
        <th scope="col">Libellé</th>
        <th scope="col">Description</th>
        <th scope="col">Prix</th>
        <th scope="col">Stock</th>
        <th scope="col">Couleur</th>
        <th scope="col">Photos</th>
        <th scope="col">Ajout</th>
        <th scope="col">Modif</th>
        <th scope="col">Bloque</th>
    </tr>
</thead>

<tbody>
    <tr>
        <td> <?php echo $produit->pro_id; ?> </td>
        <td> <?php echo $produit->pro_cat_id; ?> </td>
        <td> <?php echo $produit->pro_ref; ?> </td>
        <td> <?php echo $produit->pro_libelle; ?> </td>
        <td> <?php echo $produit->pro_description; ?> </td>
        <td> <?php echo $produit->pro_prix; ?> </td>
        <td> <?php echo $produit->pro_stock; ?> </td>
        <td> <?php echo $produit->pro_couleur; ?> </td>
        <td> <?php echo $produit->pro_photo; ?> </td>
        <td> <?php echo $produit->pro_d_ajout; ?> </td>
        <td> <?php echo $produit->pro_d_modif; ?> </td>
        <td> <?php echo $produit->pro_bloque; ?> </td>
</tr>
</tbody>
</table>
</html>



