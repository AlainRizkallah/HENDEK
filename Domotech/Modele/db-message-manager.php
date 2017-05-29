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
  function addMessage($db,$mail,$message){
    try{
  $stmt =   $db->prepare('INSERT INTO `message ext` (`mail`,`message`) VALUES (:mail,:message) ');

/*  $stmt ->bindParam(':nom',$nom);
  $stmt ->bindParam(':prenom',$prenom);*/
  $stmt ->bindParam(':mail',$mail);
/*  $stmt ->bindParam(':tel',$tel);
  $stmt ->bindParam(':objet',$objet);*/
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
