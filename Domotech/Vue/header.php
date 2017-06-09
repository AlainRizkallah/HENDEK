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
  <?php include("Vue/barremenu.php");?>
