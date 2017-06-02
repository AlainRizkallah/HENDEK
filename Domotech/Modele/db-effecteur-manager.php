<?php
    require_once("connexion.php");

function getEffecteursList($db,$idSalle){
  //  $reponse = $db->prepare('SELECT type,valeur,etat,temps FROM capteur WHERE idSalle=:idSalle');
$reponse = $db->prepare('SELECT etat,ID,idCapteur,idSalle FROM actionneur WHERE idSalle=:idSalle');
    $reponse->bindParam(':idSalle',$idSalle);
    $reponse->execute();
    return $reponse;
}
