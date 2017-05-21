<?php
  include("Modele/db-maison-manager.php");
  include("Modele/db-salle-manager.php");
  include("Modele/db-capteur-manager.php");
?>

<div class=center>
<p class="boxtitle"> BIENVENUE SUR VOTRE ACCUEIL
</p></div>



  <p class="boxtitle">
  Liste de vos maisons
</p>
<div class=textedroite></br></br>
  <p class=center>
    <a class="barre-menu-element" href ="monespace.php?cible=monespace/mamaison.php" >ajouter/supprimer des maisons</a>
  </p>
</div>


</br>
    <?php include('Vue/listemaisons.php');?>

  <br><br>

  <p class="boxtitle">
    Liste de vos pièces
  </p>
  <div class=textedroite></br></br>
    <p class=center>
      <a class="barre-menu-element" href ="monespace.php?cible=monespace/piece.php" >ajouter/supprimer des pièces</a>
    </p>
  </div>

  <br>
    <?php include('Vue/listepieces.php');?>

  <br><br>

  <p class="boxtitle">
    Liste de vos capteurs
  </p>
  <div class=textedroite></br></br>
    <p class=center>
      <a class="barre-menu-element" href ="monespace.php?cible=monespace/ajoutcapteurs.php" >ajouter/supprimer des capteurs</a>
    </p>
  </div>

  <br>
  <?php include('Vue/listecapteurs.php');?>
