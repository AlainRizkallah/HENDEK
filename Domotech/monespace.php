
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="Vue/Styles/style-monespace.css" >
  <title>Domotech</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
  <body>
    <header>

  <?php include ('Controleur/session-manager.php');?>
     <h1 class="titre"><a href=.>Domotech</a> <img src=Vue/Image/logo-domotech.png class="logo"></img></h1>
<?php include("Vue/barremenu.php");?>


</header>

<aside>
  <div class="conteneur">

      <?php include('Vue/login.php');
    if(!isset($_SESSION["userID"])){
      header('Location:login.php ');
      die;
    }
      ?>
  </div>


</aside>

<section>
  <div class="conteneur-section">


  <?php

  if(isset($_GET['cible'])) { // on regarde la page où il veut aller


    if($_GET['cible'] == 'monespace/mamaison.php'){// Changer les cibles /mon-espace/ma-maison
      include("Vue/monespace/mamaison.php");

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

      } else if ($_GET['cible'] == "monespace/capteurs.php"){
          include("Vue/monespace/capteurs.php");

      } else if ($_GET['cible'] == "monespace/ajoutcapteurs.php"){
          include("Vue/monespace/ajoutcapteurs.php");
      } else if ($_GET['cible'] == "monespace/piece.php"){
          include("Vue/monespace/piece.php");
     }  else if ($_GET['cible'] == "monespace/accueilclient.php"){
         include("Vue/monespace/accueilclient.php");
    }
        else if ($_GET['cible'] == "monespace/utilisateurs.php"){
          include("Vue/monespace/utilisateurs.php");
    }
        else if ($_GET['cible'] == "monespace/effecteurs.php"){
          include("Vue/monespace/effecteurs.php");
    }
        else if ($_GET['cible'] == "monespace/messagerie.php"){
          include("Vue/monespace/messagerie.php");
}
  } else { // affichage par défaut
        echo  ("Bienvenue sur votre espace <br><br>");
  }
  ?>
    </div>

</section>

<?php include("Vue/footer.html"); ?>
<script>

$('.barre-menu-element').click(function (e) {
$(this).addClass('active').siblings().removeClass('active');

});
</script>
  </body>
</html>
