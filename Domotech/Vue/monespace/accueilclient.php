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
<?php
  $reponse = $db->query('SELECT * FROM habitation');
  while ($donnees = $reponse->fetch()) {
    echo $donnees['nom'];?> de superficie <?php echo $donnees['superficie'];?>m² à l'adresse <?php echo $donnees['adresse'];?>
    <br> <?php }
  $reponse->closeCursor();
  ?>

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
  <?php
  $resultat=$db->query('SELECT habitation.nom hab , salle.nom sal FROM habitation , salle WHERE idHabitation=habitation.ID');
    while ($liste=$resultat->fetch()){
      echo ($liste['sal']);?> dans <?php echo ($liste['hab']);?> <br>
  <?php  } $resultat->closeCursor();?>

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
  <?php
  //jointure de 3 tables
  $resultat=$db->query('SELECT habitation.nom hab , salle.nom sal , capteur.type capt FROM habitation
  JOIN salle ON habitation.ID=salle.idHabitation
  JOIN capteur ON salle.ID=capteur.idSalle');

    while ($liste=$resultat->fetch()){
      echo ($liste['capt']);?> dans <?php echo ($liste['sal']);?> dans <?php echo ($liste['hab']);?> <br>
  <?php  } $resultat->closeCursor();?>
