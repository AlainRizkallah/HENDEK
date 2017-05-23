<?php
$resultat = getUserList($db,  $_SESSION["idGroupe"]);
  while ($liste=$resultat->fetch()){?>
<b>  <?php  echo ($liste['identifiant']);?></b>, <u>statut :</u> <b><?php echo ($liste['status']);?> </b><br>
<?php  } $resultat->closeCursor();?>
