
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="Vue/Styles/style-monespace.css" >
  <title>Domotech</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script  async defer src="js/communicationPhp.js"></script>


</head>
  <body>
    <header>

  <?php include ('Controleur/session-manager.php');?>
     <h1 class="titre"><a href=.>Domotech</a> <img src=Vue/Image/logo-domotech.png class="logo"></img></h1>



</header>
<nav>
  <?php include("Vue/barremenu.php");?>
</nav>
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


  <?php include("Controleur/test-statut.php");

  if(isset($_GET['cible'])) { // on regarde la page où il veut aller


    if($_GET['cible'] == 'monespace/mamaison.php'){// Changer les cibles /mon-espace/ma-maison
      if ($ligne['status']=='Utilisateur principal' or $ligne['status']=='Utilisateur secondaire') {include("Vue/monespace/mamaison.php");}
      else { include("Vue/monespace/accessdenied.php");}

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

      } else if ($_GET['cible'] == "monespace/capteurs.php"){ //etat des capteurs
        include("Vue/monespace/capteurs.php");

      } else if ($_GET['cible'] == "monespace/ajoutcapteurs.php"){ //gerer les capteurs
            if ($ligne['status']=='Utilisateur principal' or $ligne['status']=='Utilisateur secondaire') {include("Vue/monespace/ajoutcapteurs.php");}
            else { include("Vue/monespace/accessdenied.php");}
      } else if ($_GET['cible'] == "monespace/piece.php"){
        if ($ligne['status']=='Utilisateur principal' or $ligne['status']=='Utilisateur secondaire') {include("Vue/monespace/piece.php");}
        else { include("Vue/monespace/accessdenied.php");}
     }  else if ($_GET['cible'] == "monespace/accueilclient.php"){
         include("Vue/monespace/accueilclient.php");
    }
        else if ($_GET['cible'] == "monespace/utilisateurs.php"){
          if ($ligne['status']=='Utilisateur principal') {include("Vue/monespace/utilisateurs.php");}
          else { include("Vue/monespace/accessdenied.php");}
    }
      else if ($_GET['cible'] == "monespace/messagerie.php"){
        include("Vue/monespace/messagerie.php");
    }
      else if ($_GET['cible'] == "monespace/detail-capteur.php"){
      include("Vue/monespace/detail-capteur.php");
  }
      else if ($_GET['cible'] == "monespace/monprofil.php"){
      include("Vue/monprofil.php");
}
      else if ($_GET['cible'] == "monespace/accessdenied.php"){
      include("Vue/monespace/accessdenied.php");
      }

      else if ($_GET['cible'] == "monespace/consommation.php"){
      include("Vue/monespace/consommation.php");
      }
  } else { // affichage par défaut
        echo  ("Bienvenue sur votre espace <br><br>");
  }
  ?>
    </div>

</section>

<?php include("Vue/footer.php"); ?>
<script>
currpage = $(location).attr('href');
$('.barre-menu-element').each(function(){
  lien  = $(this).attr('href');
  if (currpage.indexOf(lien) >= 0){
    $(this).addClass('active');
  }
});

</script>
  </body>
</html>
