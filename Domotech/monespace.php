<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="Styles/HomePage.css" >
  <title>Domotech</title>
</head>
  <body>
    <header>
    <h1 class="titre">Domotech</h1>
    <?php include ('Controleur/session-manager.php'); ?>



</header>

     <?php //include("Vue/barremenu.php");?> 
    <?php include("Vue/menuclient.php");?> <!-- pour tester affichage sur une page random -->



<?php include("Vue/footer.html"); ?>

  </body>
</html>
