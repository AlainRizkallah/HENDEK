<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="Vue/Styles/style1.css" >
  <title>Domotech</title>
</head>
  <body>
    <header>
    <a href=index.php> <h1 class="titre">Domotech <img src=Vue/Image/logo-domotech.png class="logo"></img></h1> </a>
<?php include ('Controleur/session-manager.php');
include('Vue/login.php');?>
</header>
<div class="barremenu">

    <a class="barre-menu-element " href ="." > Accueil </a>
    <a class="barre-menu-element " href ="monespace.php?cible=monespace/accueilclient.php" > Mon espace </a>
    <a class="barre-menu-element " href ="offres.php" > Offres </a>
    <a class="barre-menu-element " href ="solution.php" > Solution </a>
    <a class="barre-menu-element " href ="actualites.php" > Actualités </a>
    <a class="barre-menu-element " href ="nouscontacter.php" > Nous contacter </a>
    <a class="barre-menu-element " href  ="quisommesnous.php" > Qui sommes nous? </a>
    <?php if(!isset($_SESSION["userID"])){ ?>
    <a class="barre-menu-element " href  ="inscription.php" > S'inscrire </a>
    <?php } ?>
   </div>
