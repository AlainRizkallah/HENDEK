<?php

include("../Modele/db-message-manager.php");

$resultat = addMessage($db,$_POST['mail'],$_POST['message']);
echo ($resultat);
// header ("Location: $_SERVER[HTTP_REFERER]" );

?>
