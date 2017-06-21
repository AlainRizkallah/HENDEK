<?php include_once("Modele/db-maison-manager.php");
include_once("Modele/db-salle-manager.php");
include_once("Modele/db-capteur-manager.php");
include_once("Modele/db-effecteur-manager.php");?>

<div class="conteneurBloc center">
<h1> Bienvenue sur votre espace <?php echo($_SESSION['name']);?>
</h1></div>

<div class="conteneurBloc n3">
  <h2>
  Liste de vos maisons
  </h2>
  <?php if ($ligne['status']=='Utilisateur principal' or $ligne['status']=='Utilisateur secondaire' or $ligne['status']=='admin'){ ?>
    <div class="conteneurBloc n2 right">
      <p class=center>
        <a class="boutton" href ="monespace.php?cible=monespace/mamaison.php" >ajouter/supprimer des maisons</a>
      </p>
    </div>
  <?php } ?>
  <?php include('Vue/Listes/listemaisons.php');?>
</div>



<div class="conteneurBloc n3"><br>
  <h2>
    Liste de vos pièces
  </h2>
  <?php if ($ligne['status']=='Utilisateur principal' or $ligne['status']=='Utilisateur secondaire' or $ligne['status']=='admin'){ ?>
    <div class="conteneurBloc n2 right">
      <p class=center>
        <a class="boutton" href ="monespace.php?cible=monespace/piece.php" >ajouter/supprimer des pièces</a>
      </p>
    </div>
  <?php } ?>
    <?php include('Vue/Listes/listepieces.php');?>
</div>





<div class="conteneurBloc n3"><br>
  <h2>
    Liste de vos capteurs
  </h2>
  <?php if ($ligne['status']=='Utilisateur principal' or $ligne['status']=='Utilisateur secondaire' or $ligne['status']=='admin'){ ?>
    <div class="conteneurBloc n2 right">
      <p class=center>
        <a class="boutton" href ="monespace.php?cible=monespace/ajoutcapteurs.php" >ajouter/supprimer des capteurs</a>
      </p>
    </div>
  <?php } ?>
    <?php include('Vue/Listes/listecapteurs.php');?>
</div>



  <div class="conteneurBloc n3"><br>
    <h2>
      Liste de vos effecteurs
    </h2>
    <?php if ($ligne['status']=='Utilisateur principal' or $ligne['status']=='Utilisateur secondaire' or $ligne['status']=='admin'){ ?>
      <div class="conteneurBloc n2 right">
        <p class=center>
          <a class="boutton" href ="monespace.php?cible=monespace/ajoutcapteurs.php" >ajouter/supprimer des effecteurs</a>
        </p>
      </div>
    <?php } ?>
    <?php include('Vue/Listes/listeeffecteur.php');?>
  </div>
