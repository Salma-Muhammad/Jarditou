
<?php
$serveur = "localhost";
$dbname = "cours";
$user = "root";
$pass = "";

var_dump($_POST);
echo "<br><br><br>";
// fonction qui suppr: -espace -antislash -caractères spéciaux des input
function valid_data($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


//recupération des champs avec name dans formulaire d'ajout
//verification des input avec valid_ input

    $id = valid_data($_POST["pro_id"]);
    $error_id = ""; //variable por message d'erreur
    $categorie = valid_data($_POST["pro_cat"]);
    $error_cat = "";
    $Regexid ="/^[0-9]{1,10}$/"; //pour l'id et categorie de l'id

    $reference = valid_data($_POST["pro_ref"]);
    $error_ref = "";
    $Regexref ="/^[a-z0-9_\-]{1,10}$/i";

    $libelle = valid_data($_POST["pro_libelle"]);
    $error_lib = "";
    $Regexlib ="/^[a-z0-9_\-\s]{1,200}$/i";

    $description = valid_data($_POST["pro_description"]);
    $error_description = "";
    $Regexdescription ="/^[a-z0-9_\-\s,.()']{1,1000}$/i";

    $prix = valid_data($_POST["pro_prix"]);
    $error_prix = "";
    $Regexprix ="/^[0-9]{1,6}(.[0-9]{0,2})$/";

    $stock = valid_data($_POST["pro_stock"]);
    $error_stock = "";
    $Regexstock ="/^[0-9]{1,11}$/";

    $couleur = valid_data($_POST["pro_couleur"]);
    $error_couleur = "";
    $Regexcouleur ="/^[a-z]{1,30}$/i";

    $bloque = valid_data($_POST["bloque"]);
    $error_bloque = "";

    $date_ajout = valid_data($_POST["date_ajout"]);
    $error_ajout = "";
    $Regexdate = "/^(\d{4,})-(\d{2})-(\d{2})$/";

    $date_modif = valid_data($_POST["date_modif"]);
    $error_modif = "";
    $Regexmodif = "/^(\d{4,})-(\d{2})-(\d{2})[T ](\d{2}):(\d{2})(?::(\d{2}(?:\.\d+)?))?$/";



    // Debut de la vérification du formulaire
if($_POST)
{

    //Vérification de l'id
    if (empty($id))
    {
        $error_id = "L'id du produit est requis";
    } else if (!preg_match($Regexid, $id))
    {
        $error_id = "L'id doit comporter des chiffres uniquement";
    }else
    {
        $error_id = $id;
    }
    echo " ID = ".$error_id."<br><br>";


    ///Vérification Catégorie de l'id
    if (empty($categorie))
    {
        $error_cat = "La catégorie est requise";
    } else if (!preg_match($Regexid, $categorie))
    {
        $error_cat = "La catégorie doit comporter des chiffres uniquement";
    }else
    {
        $error_cat = $categorie;
    }
    echo " Catégorie = ".$error_cat."<br><br>";


    ///Vérification de la reference
    if (empty($reference))
    {
        $error_ref = "La réference est requise";
    } else if (!preg_match($Regexref, $reference))
    {
        $error_ref = "La réference doit ecomptenir des lettres, chiffres et _ ou -";
    }else
    {
        $error_ref = $reference;
    }
    echo " Référence = ".$error_ref."<br><br>";


    //Vérification du libellé
    if (empty($libelle))
    {
        $error_lib = "Le libellé est requis";
    } else if (!preg_match($Regexlib, $libelle))
    {
        $error_lib = "Le libellé n'est pas valide";
    }else
    {
        $error_lib = $libelle;
    }
    echo " Libellé = ".$error_lib."<br><br>";


    //Vérification de la description du produit
    if (empty($description))
    {
        $error_description = "La description est requise !";
    } else if (!preg_match($Regexdescription, $description))
    {
        $error_description = "La description n'est pas valide" ;
    }else
    {
        $error_description = $description;
    }
    echo " Description = ".$error_description."<br><br>";


    //Vérification du prix
    if (empty($prix))
    {
        $error_prix = "Le prix est requis !";
    }else if (!preg_match($Regexprix, $prix))
    {
        $error_prix = "Le prix n'est pas valide";
    }else
    {
        $error_prix = $prix." €";
    }
    echo " Prix = ".$error_prix."<br><br>";


    //Vérification du stock
    if (empty($stock))
    {
        $error_stock = "La saisie du stock est requis !";
    }else if (!preg_match($Regexstock, $stock))
    {
        $error_stock = "Le saisie du stock n'est pas valide";
    } else
    {
        $error_stock = $stock;
    }
    echo " Stock = ".$error_stock."<br><br>";


    //Vérification du couleur
    if (empty($couleur))
    {
        $error_couleur = "La couleur du produit est requis !";
    }else if (!preg_match($Regexcouleur, $couleur))
    {
        $error_prix = "La couleur du produit n'est pas valide";
    } else
    {
        $error_couleur = $couleur;
    }
    echo " Couleur = ".$error_couleur."<br><br>";


   //Vérification du produit bloqué
    if (!isset($bloque))
    {
        $error_bloque = "Il faut cocher oui ou non";
    } else
    {
        $error_bloque = $bloque;
    }
    echo " Produit bloqué = ".$error_bloque."<br><br>";


    //Vérification de la date
    if (empty($date_ajout))
    {
        $error_ajout = "La date est requise";
    }else if (!preg_match($Regexdate, $date_ajout))
    {
        $error_ajout = "Le date n'est pas valide";
    } else
    {
        $error_ajout = $date_ajout;
    }
    echo "Date d'ajout = ".$error_ajout."<br><br>";


    //Vérification de la date de modification
    if (!preg_match($Regexmodif, $date_modif))
    {
        $error_modif = "Le date n'est pas valide";
    } else
    {
        $error_modif = $date_modif;
    }
    echo "Date de modification = ".$error_modif."<br><br>";

}

header("Location:assets/php/liste.php");

?>