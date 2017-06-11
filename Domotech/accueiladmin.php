
<html lang="fr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="Vue/Styles/style-monespace.css" >
  <title>Domotech</title>
</head>
  <body>
    <header>

  <?php include ('Controleur/session-manager.php');?>
    <h1 class="titre"><a href=.>Domotech</a> <img src=Vue/Image/logo-domotech.png class="logo"></img></h1> <!-- afficher menu navigation d'admin -->
    <div class="barremenu">

        <a class="barre-menu-element" href ="." > Accueil du site</a>
        <a class="barre-menu-element" href ="accueiladmin.php?cible=accueiladmin/users.php" >Gérer les utilisateur</a>
        <a class="barre-menu-element" href ="accueiladmin.php?cible=accueiladmin/news.php" >Ajouter une actualité</a>
        <a class="barre-menu-element" href ="accueiladmin.php?cible=accueiladmin/messagerie.php" >Messagerie</a>
        <a class="barre-menu-element" href ="accueiladmin.php?cible=accueiladmin/capteffect.php" >Capteurs et effecteurs disponibles</a>
       </div>
    </header>


        <section>
          <div class="conteneur-section">


          <?php
include("Controleur/test-statut.php");



          if(isset($_GET['cible'])) { // on regarde la page où il veut aller


            if($_GET['cible'] == 'accueiladmin/users.php'){
              if ($ligne['status']=='admin') {include("Vue/accueiladmin/users.php");}
              else { echo ("
                <p class=boxtitle>
                  Vous n'avez pas accès à cette partie du site <br>
                  <img src='Vue/Image/accessdenied.jpg' width=20%></img>
                </p> "); }

              } else if ($_GET['cible'] == "etape1"){
                  include("Modele/utilisateurs.php");
                  $reponse = utilisateurs($db);
                  include("Vue/etape1.php");

              } else if ($_GET['cible'] == "accueiladmin/news.php"){
                if ($ligne['status']=='admin') {  include("Vue/accueiladmin/news.php"); }
                else { echo ("
                  <p class=boxtitle>
                    Vous n'avez pas accès à cette partie du site <br>
                    <img src='Vue/Image/accessdenied.jpg' width=20%></img>
                  </p> "); }

              } else if ($_GET['cible'] == "accueiladmin/messagerie.php"){
                if ($ligne['status']=='admin') {  include("Vue/accueiladmin/messagerie.php");}
                else { echo ("
                  <p class=boxtitle>
                    Vous n'avez pas accès à cette partie du site <br>
                    <img src='Vue/Image/accessdenied.jpg' width=20%></img>
                  </p> "); }

              } else if ($_GET['cible'] == "accueiladmin/statistiques.php"){
              if ($ligne['status']=='admin') {    include("Vue/accueiladmin/statistiques.php");}
              else { echo ("
                <p class=boxtitle>
                  Vous n'avez pas accès à cette partie du site <br>
                  <img src='Vue/Image/accessdenied.jpg' width=20%></img>
                </p> "); }

              } else if ($_GET['cible'] == "accueiladmin/accueil.php"){
              if ($ligne['status']=='admin') {    include("Vue/accueiladmin/accueil.php");}
              else { echo ("
                <p class=boxtitle>
                  Vous n'avez pas accès à cette partie du site <br>
                  <img src='Vue/Image/accessdenied.jpg' width=20%></img>
                </p> "); }
              } else if ($_GET['cible'] == "accueiladmin/capteffect.php"){
              if ($ligne['status']=='admin') {    include("Vue/accueiladmin/capteffect.php");}
              else { echo ("
                <p class=boxtitle>
                  Vous n'avez pas accès à cette partie du site <br>
                  <img src='Vue/Image/accessdenied.jpg' width=20%></img>
                </p> "); }
              }


          } else { // affichage par défaut

          }
          ?>
            </div>

        </section>

<?php
include("Vue/footer.php"); ?>

</html>
