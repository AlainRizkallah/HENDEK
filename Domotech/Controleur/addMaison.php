<?php

include("../Modele/db-maison-manager.php");
$resultat = addHabitation($db,$_POST['adresse'],$_POST['nom'], $_POST['superficie']);
echo ($resultat);
header ("Location: $_SERVER[HTTP_REFERER]" ); // redirige l'utilisateur sur la page précédente

?>
