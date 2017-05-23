<?php
//  $reponse = $db->query('SELECT * FROM habitation');
$reponse = getHabitationsList($db,  $_SESSION["idGroupe"]);
  while ($donnees = $reponse->fetch()) {?>
  <b>  <?php echo $donnees['nom'];?> </b> de superficie <b><?php echo $donnees['superficie'];?>m²</b> à l'adresse<b> <?php echo $donnees['adresse'];?></b>
    <br> <?php }
  $reponse->closeCursor();
  ?>
