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
    <?php include ('Controleur/session-manager.php');

    if(!isset($_SESSION["userID"])){
      header('Location:login.php ');
      die;
    }
      ?>

</header>

     <?php include("Vue/barremenu.php");?>

<section>
  <?php if(isset($_GET['cible'])) { // on regarde la page où il veut aller
      if($_GET['cible'] == 'mon-espace/ma-maison'){// Changer les cibles
          include("Vue/login.php");


            //modification du code retour
            header("Status: 200 OK", false, 200);
            //alimentation du paramètre GET
            $_GET['cible'] = "teste";
            $_REQUEST['cible'] = "teste2";



      } else if ($_GET['cible'] == "etape1"){
          include("Modele/utilisateurs.php");
          $reponse = utilisateurs($db);
          include("Vue/etape1.php");

      } else if ($_GET['cible'] == "monespace/capteurs.php"){
          include("Vue/monespace/capteurs.php");

      } else if ($_GET['cible'] == "etape2"){
          include("Vue/etape2.php");
      } else if ($_GET['cible'] == "etape3"){
          include("Vue/etape3.php");
     } else if ($_GET['cible'] == "deconnexion"){
          // Détruit toutes les variables de session
          $_SESSION = array();
          if (isset($_COOKIE[session_name()])) {
              setcookie(session_name(), '', time()-42000, '/');
          }
          session_destroy();
          include("Vue/non_connecte.php");
      }
  } else { // affichage par défaut
        echo  ("Bienvenue sur votre espace <br><br>");
  }
  ?>

</section>

<?php include("Vue/footer.html"); ?>

  </body>
</html>
