<?php

include("../Modele/db-salle-manager.php");
$resultat = addSalle($db,$_POST['maison'],$_POST['nom']);
echo ($resultat);

?>
