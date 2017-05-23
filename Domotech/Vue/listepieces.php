<?php
//$resultat=$db->query('SELECT habitation.nom hab , salle.nom sal FROM habitation WHERE idGroupe=$_SESSION[idGroupe]
//JOIN salle ON idHabitation=habitation.ID ');
$resultat = getSalle($db,  $_SESSION["idGroupe"]);  
  while ($liste=$resultat->fetch()){
    echo ($liste['sal']);?> dans <?php echo ($liste['hab']);?> <br>
<?php  } $resultat->closeCursor();?>
