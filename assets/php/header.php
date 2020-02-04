<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Bienvenue sur le site de Jarditou</title>
        <!--lien bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    </head>

<!--systeme grid 1 seul container-->
    <div class=" container-fluid">
        <div class="container">

        <header class="row p-1 mb-2 ">
            <div class="col">
                <img src="assets/img/jarditou_logo.jpg" width="60%" >
            </div>
            <div class="col">
                <h4 class=" text-uppercase text-center text-primary mt-3" >La qualité depuis 70 ans</h4>
            </div>
        </header>

        <!--barre de navigation haut de page-->
        <nav id="navbar" class="navbar navbar-expand-sm bg-dark navbar-dark">
            <!--expand permet de bloquer le bouton hamburger pour ecran sm seulement -->
            <!--code du bouton hamburger-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!---fin code hamb-->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="indexb.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="produit_1.php">Tableau</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact_1.php">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>