<?php
  $reponse = $db->query('SELECT * FROM habitation');
  while ($donnees = $reponse->fetch()) {
    echo $donnees['nom'];?> de superficie <?php echo $donnees['superficie'];?>m² à l'adresse <?php echo $donnees['adresse'];?>
    <br> <?php }
  $reponse->closeCursor();
  ?>
