<?php
//$resultat=$db->query('SELECT habitation.nom hab , salle.nom sal FROM habitation WHERE idGroupe=$_SESSION[idGroupe]
//JOIN salle ON idHabitation=habitation.ID ');
$resultat = getSalleList($db,  $_SESSION["idGroupe"]);
  while ($liste=$resultat->fetch()){?>
  <b>  <?php echo ($liste['sal']);?> </b>dans <b><?php echo ($liste['hab']);?> </b><br>
<?php  } $resultat->closeCursor();?>
