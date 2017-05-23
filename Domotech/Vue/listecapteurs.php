<?php //jointure de 3 tables
/*
$resultat=$db->query('SELECT habitation.nom hab , salle.nom sal , capteur.type capt FROM habitation
JOIN salle ON habitation.ID=salle.idHabitation
JOIN capteur ON salle.ID=capteur.idSalle');
*/

$resultat=getCapteurList($db,  $_SESSION["idGroupe"]);
  while ($liste=$resultat->fetch()){?>
    <b><?php echo ($liste['capt']);?></b> dans <b><?php echo ($liste['sal']);?></b> dans <b><?php echo ($liste['hab']);?> </b><br>
<?php  } $resultat->closeCursor();?>
