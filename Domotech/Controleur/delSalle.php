<?php

include("../Modele/db-salle-manager.php");

$resultat = delSalle($db, $_POST['salle']) ;
echo ($resultat);

header ("Location: $_SERVER[HTTP_REFERER]" ); // redirige l'utilisateur sur la page précédente
?>
