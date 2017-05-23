$reponse =
<?php
$resultat = getUserList($db,  $_SESSION["idGroupe"]);
  while ($liste=$resultat->fetch()){
    echo ($liste['identifiant']);?>, statut : <?php echo ($liste['status']);?> <br>
<?php  } $resultat->closeCursor();?>
