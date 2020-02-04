<?php

var_dump($_POST);
echo "<br>";

// definie les variables vide
$nomErr = $prenomErr = $sexeErr = $ddnErr = $emailErr = $demandeErr = $messageErr = $checkboxErr = "";

// fonction qui suppr: -espace -antislash -caractères spéciaux des input
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//recupération des champs avec name dans html
    $nom = $_POST["nom"];
    $prenom = $_POST['prenom'];
    $sexe = $_POST["sexe"];
    $ddn = $_POST["ddn"];
    $email = $_POST["email"];
    $demande = $_POST["demande"];
    $message = $_POST["message"];
    $checkbox = $_POST["checkbox"];


    //Vérification du nom
    if (empty($nom))
    {
        $nomErr = "Le nom est requis";
    } else if (!preg_match("/^[a-zA-Z '\-éèêëçäà]+$/", $nom))
    {
        $nomErr = "Le nom doit comporter des lettres";
    }else
    {
        $nomErr = "Good job! ".$nom;
    }
    echo $nomErr."<br>";


    ///Vérification du prénom
    if (empty($prenom))
    {
        $prenomErr = "prenom est requis";
    } else if (!preg_match("/^[a-zA-Z '\-éèêëçäà]+$/", $prenom))
    {
        $prenomErr = "le prenom n'est pas valide";
    }else
    {
        $prenomErr = "Good job! ".$prenom;
    }
    echo $prenomErr."<br>";


    ///Vérification du sexe
    if (empty($sexe))
    {
        $sexeErr = "Le sexe est requis";
    } else
    {
        $sexeErr = "ok ".$sexe;
    }
    echo $sexeErr."<br>";


    //Vérification de la date de naissance
    if (empty($ddn))
    {
        $ddnErr = "date est requis";
    } else if (!preg_match("/^[0-9][0-9]?\/[0-9][0-9]?\/[0-9][0-9]([0-9][0-9])?$/", $ddn))
    {
        $ddnErr = "la date n'est pas valide";
    }else
    {
        $ddnErr = "good ".$ddn;
    }
    echo $ddnErr."<br>";


    //Vérification du email
    if (empty($email))
    {
        $emailErr = "L'email est requis !";
    } else if (!preg_match("/^[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/", $email))
    {
        $email = "l'email n'est pas valide" ;
    }else
    {
        $emailErr = "email ok! ".$email;
    }
    echo $emailErr."<br>";


    //Vérification du sujet
    if (empty($demande))
    {
        $demandeErr = "demande est requis !";
    } else
    {
        $demandeErr = "ok ".$demande;
    }
    echo $demandeErr."<br>";


    //Vérification du message
    if (empty($message))
    {
        $messageErr = "message est requis !";
    } else
    {
        $messageErr = "Message accepté ".$message;
    }
    echo $messageErr."<br";


    //Vérification du checkbox
    if (empty($checkbox))
    {
        $checkboxErr = "checkbox est requis !";
    } else
    {
        $checkboxErr = "checkbox ok ! " ;
    }
    echo $checkboxErr."<br>";



?>