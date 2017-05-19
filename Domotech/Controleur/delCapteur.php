<?php
include("../Modele/db-capteur-manager.php");

$resultat = delCapteur($db,$_POST['capteur']);
echo ($resultat);

//header ("Location: $_SERVER[HTTP_REFERER]" ); // redirige l'utilisateur sur la page précédente
?>
