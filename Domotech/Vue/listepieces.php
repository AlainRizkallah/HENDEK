<?php
$resultat=$db->query('SELECT habitation.nom hab , salle.nom sal FROM habitation , salle WHERE idHabitation=habitation.ID');
  while ($liste=$resultat->fetch()){
    echo ($liste['sal']);?> dans <?php echo ($liste['hab']);?> <br>
<?php  } $resultat->closeCursor();?>
