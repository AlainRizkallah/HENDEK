<?php

include("../Modele/db-message-manager.php");

$resultat = addMessage($db,$_POST['mail'],$_POST['message'],$_POST['nom'], $_POST['prenom'], $_POST['tel'], $_POST['objet']);
echo ($resultat);
header ("Location: $_SERVER[HTTP_REFERER]" );

?>
