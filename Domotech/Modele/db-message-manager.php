<?php
require_once("connexion.php");


  function sendMessageExt($db,$mail,$message,$nom, $prenom, $tel, $objet){
    try{
  $stmt =   $db->prepare('INSERT INTO `messageext` (`mail`,`message`,`nom`, `prenom`, `tel`, `objet` , `date`) VALUES (:mail,:message, :nom, :prenom, :tel, :objet , NOW() ) ');

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
$stmt =   $db->prepare('INSERT INTO `messageint` (`idSend`,`idDest`,`objet`, `message`, `date`) VALUES (:idSend, :idDest, :objet, :message , NOW() ) ');


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

function getMessagesList($db , $idDest){
$reponse = $db->prepare('SELECT messageint.ID ID , messageint.objet objet , messageint.message message , utilisateurs.nom nom , lu , messageint.date datee FROM `messageint`
  JOIN utilisateurs ON utilisateurs.id=messageint.idSend
  WHERE idDest = :idDest
  ORDER BY ID DESC'
);
$reponse->bindParam(':idDest', $idDest);
$reponse->execute();
  return $reponse;
}

function getMessageExtList($db){
$reponse = $db->prepare('SELECT messageext.ID ID , messageext.objet objet , messageext.message message , messageext.nom nom , lu , messageext.prenom prenom , messageext.tel tel , messageext.mail mail , messageext.date datee FROM `messageext`
  ORDER BY ID DESC'
);
$reponse->execute();
  return $reponse;
}

function delMessageInt($db,$idMessage){
    try{
      $stmt = $db->prepare('DELETE FROM `messageint` WHERE `ID`=:idMessage');
      $stmt->bindParam(':idMessage',$idMessage);
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
function delMessageExt($db,$idMessage){
        try{
          $stmt = $db->prepare('DELETE FROM `messageext` WHERE `ID`=:idMessage');
          $stmt->bindParam(':idMessage',$idMessage);
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

function unreadMsg($db , $idDest){
  $reponse = $db->prepare('SELECT * FROM `messageint` WHERE idDest = :idDest AND `lu` = 0 ');
  $reponse->bindParam(':idDest', $idDest);
  $reponse->execute();
  return $reponse;
    }


function setLuMessage($db , $idMessage){
  $stmt = $db->prepare('UPDATE `messageint` SET lu = 1 WHERE `ID`=:idMessage');
  $stmt->bindParam(':idMessage',$idMessage);
  $stmt->execute() or die(print_r($stmt ->errorInfo(), true));
}

function setNonluMessage($db , $idMessage){
  $stmt = $db->prepare('UPDATE `messageint` SET lu = 0 WHERE `ID`=:idMessage');
  $stmt->bindParam(':idMessage',$idMessage);
  $stmt->execute() or die(print_r($stmt ->errorInfo(), true));
}

function setLuMessageExt($db , $idMessage){
  $stmt = $db->prepare('UPDATE `messageext` SET lu = 1 WHERE `ID`=:idMessage');
  $stmt->bindParam(':idMessage',$idMessage);
  $stmt->execute() or die(print_r($stmt ->errorInfo(), true));
}

function setNonluMessageExt($db , $idMessage){
  $stmt = $db->prepare('UPDATE `messageext` SET lu = 0 WHERE `ID`=:idMessage');
  $stmt->bindParam(':idMessage',$idMessage);
  $stmt->execute() or die(print_r($stmt ->errorInfo(), true));
}
?>
