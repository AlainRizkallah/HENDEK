
<html lang="fr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="Vue/Styles/style1.css" >
  <title>Domotech</title>
</head>
  <body>
    <header>


    <a href=index.php> <h1 class="titre">Domotech <img src=Vue/Image/logo-domotech.png width=15%></img></h1> </a>
    <div class="barremenu">

        <a class="barre-menu-element" href ="index.php" > Accueil du site</a>
        <a class="barre-menu-element" href ="accueiladmin.php?cible=accueiladmin/users.php" >Gérer les utilisateur</a>
        <a class="barre-menu-element" href ="accueiladmin.php?cible=accueiladmin/news.php" >Ajouter une actualité</a>
        <a class="barre-menu-element" href ="accueiladmin.php?cible=accueiladmin/messagerie.php" >Messagerie</a>
        <a class="barre-menu-element" href ="accueiladmin.php?cible=accueiladmin/statistiques.php" >Statistiques</a>
       </div>
    </header>


    <section>
      <div class="conteneur-section">


      <?php

      if(isset($_GET['cible'])) { // on regarde la page où il veut aller


        if($_GET['cible'] == 'accueiladmin/users.php'){// Changer les cibles /mon-espace/ma-maison
          include("Vue/accueiladmin/users.php");

    /*
              if (preg_match('#monespace-([0-9-]+)\.php#isU', $_SERVER['REDIRECT_URL'], $match)) {
                //TODO $_SERVER['REDIRECT_URL'] pas reconnu
    	           // Modification du code retour, pour que les moteurs de recherche indexent nos pages !
    	            header("Status: 200 OK", false, 200);


        }*/


          } else if ($_GET['cible'] == "etape1"){
              include("Modele/utilisateurs.php");
              $reponse = utilisateurs($db);
              include("Vue/etape1.php");

          } else if ($_GET['cible'] == "accueiladmin/news.php"){
              include("Vue/accueiladmin/news.php");

          } else if ($_GET['cible'] == "accueiladmin/messagerie.php"){
              include("Vue/accueiladmin/messagerie.php");

          } else if ($_GET['cible'] == "accueiladmin/statistiques.php"){
              include("Vue/accueiladmin/statistiques.php");
          }


      } else { // affichage par défaut
            ?>  <div class=textecentre>
              <p class="boxtitle">  ACCUEIL ADMINISTRATEUR
              </p></div>"<?php
      }
      ?>
        </div>

    </section>



<?php include("Vue/footer.html"); ?>
</html>
