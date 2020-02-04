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

// fonction de vérification des id inexistant
function verif($produit)
{
    if(!$produit)
    {
        die("ID : ". $_GET["pro_id"]." inexistant");
    }
}

// autre fonction verif
function verif1($result)
{
    if (!$result)
    {
        $tableauErreurs = $db->errorInfo();
        echo $tableauErreur[2];
        die("Erreur dans la requête");
    }
    if ($result->rowCount() == 0)
    {
        // Pas d'enregistrement
        die("La table est vide");
    }
}
?>
