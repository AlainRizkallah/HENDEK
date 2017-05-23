<?php include("Modele/db-maison-manager.php");
include("Modele/db-salle-manager.php");
include("Modele/db-capteur-manager.php");?>

<div class=center>
<p class="boxtitle"> BIENVENUE SUR VOTRE ESPACE
</p></div>



  <h2>
  Liste de vos maisons
</h2>
<div class=textedroite></br></br>
  <p class=center>
    <a class="boutton" href ="monespace.php?cible=monespace/mamaison.php" >ajouter/supprimer des maisons</a>
  </p>
</div>


</br>
    <?php include('Vue/listemaisons.php');?>

  <br><br>

  <h2>
    Liste de vos pièces
  </h2>
  <div class=textedroite></br></br>
    <p class=center>
      <a class="boutton" href ="monespace.php?cible=monespace/piece.php" >ajouter/supprimer des pièces</a>
    </p>
  </div>

  <br>
    <?php include('Vue/listepieces.php');?>

  <br><br>

  <h2>
    Liste de vos capteurs
  </h2>
  <div class=textedroite></br></br>
    <p class=center>
      <a class="boutton" href ="monespace.php?cible=monespace/ajoutcapteurs.php" >ajouter/supprimer des capteurs</a>
    </p>
  </div>

  <br>
  <?php include('Vue/listecapteurs.php');?>
