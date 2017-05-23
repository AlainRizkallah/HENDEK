<?php

include("../Modele/db-maison-manager.php");
session_start();

$resultat = addHabitation($db,$_POST['adresse'],$_POST['nom'], $_POST['superficie'],$_SESSION["idGroupe"]);
header ("Location: $_SERVER[HTTP_REFERER]" ); // redirige l'utilisateur sur la page précédente

?>
