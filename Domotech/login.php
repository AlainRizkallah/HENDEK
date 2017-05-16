<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="Vue/Styles/style1.css" >
  <title>Domotech</title>
</head>
  <body>
    <header>
    <a href=index.php> <h1 class="titre">Domotech</h1> </a>
    <?php include ('Controleur/session-manager.php'); ?>



</header>

    <?php include("Vue/barremenu.php");?>

    <section>
      <h2 class=center>Il faut être connecté pour accéder à votre espace</h2>

      <div class="conteneur-section center">
        <div class="center">
          <?php

           include ('Vue/login.php');

           ?>

           <p>
             Si vous n'avez pas de compte, vous pouvez en créer un
             </p>
             <div class="center">

               <a class="boutton" href="inscription.php">Créer un compte</a>
             </div>
        </div>

      </div>
    </section>

<?php include("Vue/footer.html"); ?>

  </body>
</html>
