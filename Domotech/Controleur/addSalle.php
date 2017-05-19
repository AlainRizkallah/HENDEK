<?php

include("../Modele/db-salle-manager.php");
$resultat = addSalle($db,$_POST['maison'],$_POST['nom']);
echo ($resultat);
header ("Location: $_SERVER[HTTP_REFERER]" ); // redirige l'utilisateur sur la page précédente

?>
