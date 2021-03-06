<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {

   if(isset($_POST['messageExt'])){
     sendExt();
  }

  if(isset($_POST['messageInt'])){
      sendInt();
  }
  if(isset($_POST['delMsgInt'])){
      supprInt();
  }
  if(isset($_POST['nonlu'])){
      markRead();
  }
  if(isset($_POST['lu'])){
      markUnread();
  }
  if(isset($_POST['delMsgExt'])){
      supprExt();
  }
  if(isset($_POST['nonluExt'])){
      markReadExt();
  }
  if(isset($_POST['luExt'])){
      markUnreadExt();
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
  include("../Modele/db-utilisateur-manager.php");
  session_start();
  $rslt = $db->query('SELECT id
  FROM utilisateurs
  WHERE identifiant = "'.$_POST['destinataire'].'"');
  $Dest=$rslt->fetch();
  $resultat = sendMessageInt($db, $_SESSION['userID'] , $Dest['id']  , $_POST['objet'], $_POST['message']);
  echo ($resultat);
    header ("Location: ../monespace.php?cible=monespace/messagerie.php&addel=add" );
}

function supprInt(){
  include("../Modele/db-message-manager.php");
  $resultat = delMessageInt($db , $_POST['delMsgInt']);
  echo ($resultat);
    header ("Location: ../monespace.php?cible=monespace/messagerie.php&addel=del" );
}

function supprExt(){
  include("../Modele/db-message-manager.php");
  $resultat = delMessageExt($db , $_POST['delMsgExt']);
  echo ($resultat);
  header ("Location: $_SERVER[HTTP_REFERER]" );
}

function markRead(){
  include("../Modele/db-message-manager.php");
  $resultat = setLuMessage($db , $_POST['nonlu']);
  echo ($resultat);
  header ("Location: $_SERVER[HTTP_REFERER]" );
}

function markUnread(){
  include("../Modele/db-message-manager.php");
  $resultat = setNonluMessage($db , $_POST['lu']);
  echo ($resultat);
  header ("Location: $_SERVER[HTTP_REFERER]" );
}

function markReadExt(){
  include("../Modele/db-message-manager.php");
  $resultat = setLuMessageExt($db , $_POST['nonluExt']);
  echo ($resultat);
  header ("Location: $_SERVER[HTTP_REFERER]" );
}

function markUnreadExt(){
  include("../Modele/db-message-manager.php");
  $resultat = setNonluMessageExt($db , $_POST['luExt']);
  echo ($resultat);
  header ("Location: $_SERVER[HTTP_REFERER]" );
}

?>
