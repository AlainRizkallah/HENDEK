<?php //jointure de 3 tables
/*
$resultat=$db->query('SELECT habitation.nom hab , salle.nom sal , capteur.type capt FROM habitation
JOIN salle ON habitation.ID=salle.idHabitation
JOIN capteur ON salle.ID=capteur.idSalle');
*/

$resultat=getCapteurList($db,  $_SESSION["idGroupe"]);
  while ($liste=$resultat->fetch()){
    echo ($liste['capt']);?> dans <?php echo ($liste['sal']);?> dans <?php echo ($liste['hab']);?> <br>
<?php  } $resultat->closeCursor();?>
