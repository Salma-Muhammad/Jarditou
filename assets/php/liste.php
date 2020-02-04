<?php
require("header.php");
require("connexion_bdd.php"); // Inclusion de notre bibliothèque de fonctions
    $db = connexionBase(); // Appel de la fonction de connexion
    $requete = "SELECT pro_id, pro_ref, pro_libelle FROM produits WHERE ISNULL(pro_bloque) ORDER BY pro_d_ajout DESC";
    $result = $db->query($requete);

    verif1($result);
    ?>

<h1 class="text-center">Liste des produits</h1>
    <div class="container">
        <table>;
        <?php
        while ($row = $result->fetch(PDO::FETCH_OBJ))
        {
            echo"<tr>";
            echo"<td>".$row->pro_id."</td>";
            echo"<td>".$row->pro_ref."</td>";
            echo"<td><a href=\"detail.php?id=".$row->pro_id."\" title=\"".$row->pro_libelle."\"></a></td>";
            echo"</tr>";
        }
        ?>
        </table>


        <?php
        foreach ($liste_produit as $row)
        {
            if($row->pro_bloque==1){
                $ok = 'oui';

            }else{
                $ok = 'non';
            }
        }?>

    </div>
</body>
</html>