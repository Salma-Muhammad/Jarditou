<?php
/**********************************************************************
               inclusion des fichier externe
 **********************************************************************/

 // Fichier 'fonctions.php'
function writeMessage($text)
{
   $html = "<h1>".$text."</h1>";
   echo $html;
}
?>

<?php
//debut fichier html
include("fonctions.php");
$message = "Hello world !";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
   <title>Inclusion de fichiers PHP</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
writeMessage($message);
?>
<br>

<?php
writeMessage("Bonjour tout le monde !");
?>
</body>
</html>



<?php

/**********************************************************************
               Découpage d'une page HTML
 **********************************************************************/
// cf jarditou


/**********************************************************************
               Vérification de l'existence d'un fichier
 **********************************************************************/
// Fichier 'hello.php'

<?php
if (file_exists("chemin/entete.php") )
{
   include("chemin/entete.php");
}
else
{
   echo "il y a un problème ! "

?>