<?php

include("../Modele/db-maison-manager.php");

$resultat = delHabitation($db, $_POST['habitation']) ;
echo ($resultat);

header ("Location: $_SERVER[HTTP_REFERER]" ); // redirige l'utilisateur sur la page précédente
?>
