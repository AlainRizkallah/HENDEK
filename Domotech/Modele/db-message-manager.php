<?php
require_once("connexion.php");


  function sendMessageExt($db,$mail,$message,$nom, $prenom, $tel, $objet){
    try{
  $stmt =   $db->prepare('INSERT INTO `message ext` (`mail`,`message`,`nom`, `prenom`, `tel`, `objet`) VALUES (:mail,:message, :nom, :prenom, :tel, :objet) ');

  $stmt ->bindParam(':nom',$nom);
  $stmt ->bindParam(':prenom',$prenom);
  $stmt ->bindParam(':mail',$mail);
  $stmt ->bindParam(':tel',$tel);
  $stmt ->bindParam(':objet',$objet);
  $stmt ->bindParam(':message',$message);
  $stmt->execute() or die(print_r($stmt ->errorInfo(), true));
  $res="fait";
}
catch (Exception $e)
{

    die('Erreur : ' . $e->getMessage());
    $res= $e->getMessage();
}
  return $res;
}

function sendMessageInt($db,$idSend, $idDest , $objet, $message){
	try{
$stmt =   $db->prepare('INSERT INTO `message int` (`idSend`,`idDest`,`objet`, `message`) VALUES (:idSend, :idDest, :objet, :message) ');


$stmt ->bindParam(':idSend',$idSend);
$stmt ->bindParam(':idDest',$idDest);
$stmt ->bindParam(':objet',$objet);
$stmt ->bindParam(':message',$message);
$stmt->execute() or die(print_r($stmt ->errorInfo(), true));
$res="fait";
}
catch (Exception $e)
{

	die('Erreur : ' . $e->getMessage());
	$res= $e->getMessage();
}
return $res;
}



?>
