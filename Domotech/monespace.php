<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="Styles/style1.css" >
  <title>Domotech</title>
</head>
  <body>
    <header>

    <a href=index.php> <h1 class="titre">Domotech</h1> </a>
    <?php include ('Controleur/session-manager.php'); ?>



</header>

    <?php include("Vue/barremenu.php");?>
    <?php include("Vue/menuclient.php");?>

<section>
Bienvenue sur votre espace  <br><br>
</section>

<?php include("Vue/footer.html"); ?>

  </body>
</html>
