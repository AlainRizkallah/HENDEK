<?php

include("../Modele/db-capteur-manager.php");
$resultat = addCapteur($db,$_POST['piece'],$_POST['maison'],$_POST['type']);
echo ($resultat);

?>
