<?php
require_once("connexion.php");




	/*
	 * cette fonction sert à nettoyer et enregistrer un texte

	function Rec($text)
	{
		$text = htmlspecialchars(trim($text), ENT_QUOTES);
		if (1 === get_magic_quotes_gpc())
		{
			$text = stripslashes($text);
		}

		$text = nl2br($text);
		return $text;
	};
*/
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

function sendMessageInt($db,$idSender,$idDest,$objet, $message){
	try{
$stmt =   $db->prepare('INSERT INTO `message int` (`idSender`,`idDest`,`objet`, `message`) VALUES (:idSender,:idDest, :objet, :message) ');


$stmt ->bindParam(':idSender',$idSender);
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
