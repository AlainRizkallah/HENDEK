<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {

   if(isset($_POST['messageExt'])){
     sendExt();
  }

  if(isset($_POST['messageInt'])){
      sendInt();
  }

}


function sendExt(){
  include("../Modele/db-message-manager.php");
  $resultat = sendMessageExt($db,$_POST['mail'],$_POST['message'],$_POST['nom'], $_POST['prenom'], $_POST['tel'], $_POST['objet']);
  echo ($resultat);
  header ("Location: $_SERVER[HTTP_REFERER]" );
}

function sendInt(){
  include("../Modele/db-message-manager.php");
  $resultat = sendMessageInt($db);
  echo ($resultat);
  header ("Location: $_SERVER[HTTP_REFERER]" );

}

?>
