<?php include_once("Modele/db-maison-manager.php");
include_once("Modele/db-salle-manager.php");
include_once("Modele/db-capteur-manager.php");?>

<div class="conteneurBloc n2 center">
<h3> BIENVENUE SUR VOTRE ESPACE
</h3></div>

<div class="conteneurBloc n2 left"></br>
  <h2>
  Liste de vos maisons
  </h2>
  <?php include('Vue/Listes/listemaisons.php');?>
</div>

<div class="conteneurBloc n2 right"><br>
  <p class=center>
    <a class="boutton" href ="monespace.php?cible=monespace/mamaison.php" >ajouter/supprimer des maisons</a>
  </p>
</div>

<div style="clear:left;" class="conteneurBloc n2 left"></br>
  <h2>
    Liste de vos pièces
  </h2>
  <?php include('Vue/Listes/listepieces.php');?>
</div>
<div class="conteneurBloc n2 right"><br>
  <p class=center>
    <a class="boutton" href ="monespace.php?cible=monespace/piece.php" >ajouter/supprimer des pièces</a>
  </p>
</div>

<div style="clear:left;" class="conteneurBloc n2 left"><br>
  <h2>
    Liste de vos capteurs
  </h2>
  <?php include('Vue/Listes/listecapteurs.php');?>
</div>
<div class="conteneurBloc n2 right"><br>
  <p class=center>
    <a class="boutton" href ="monespace.php?cible=monespace/ajoutcapteurs.php" >ajouter/supprimer des capteurs</a>
  </p>
</div>
