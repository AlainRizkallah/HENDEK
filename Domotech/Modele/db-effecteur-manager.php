<?php
    require_once("connexion.php");

function getEffecteursList($db,$idSalle){
  //  $reponse = $db->prepare('SELECT type,valeur,etat,temps FROM capteur WHERE idSalle=:idSalle');
$reponse = $db->prepare('SELECT etat,ID,idCapteur,idSalle FROM actionneur WHERE idSalle=:idSalle');
    $reponse->bindParam(':idSalle',$idSalle);
    $reponse->execute();
    return $reponse;
}

function addEffecteur($db,$idSalle,$idMaison,$type){
  try{//TODO: ajouter le champs nom ?
  $stmt = $db->prepare('INSERT INTO `actionneur` (`idSalle`, `idMaison`,`type`) VALUES (:idSalle,:idMaison,:type) ');
  $stmt->bindParam(':idSalle',$idSalle);
  $stmt->bindParam(':idMaison',$idMaison);
  $stmt->bindParam(':type',$type);
  $stmt->execute() or die(print_r($stmt->errorInfo(), true));
  $res="fait";
}
catch (Exception $e)
{
  die('Erreur : ' . $e->getMessage());
  $res= $e->getMessage();
}
return $res;
}

function getEffecteurGroupList($db,$idGroupe){

$reponse=$db->prepare('SELECT habitation.nom hab , salle.nom sal , actionneur.type act , actionneur.ID ID FROM habitation
JOIN salle ON habitation.ID=salle.idHabitation
JOIN actionneur ON salle.ID=actionneur.idSalle WHERE idGroupe=:idGroupe');
$reponse->bindParam(':idGroupe', $idGroupe);
$reponse->execute();
return $reponse;
}

function delEffecteur($db,$idEffecteur){
  try{//TODO: ajouter le champs nom ?
  $stmt = $db->prepare('DELETE FROM `actionneur` WHERE `ID`=:idEffecteur');
  $stmt->bindParam(':idEffecteur',$idEffecteur);
  $stmt->execute() or die(print_r($stmt->errorInfo(), true));
  $res="fait";
}
catch (Exception $e)
{
  die('Erreur : ' . $e->getMessage());
  $res= $e->getMessage();
}
return $res;
}
