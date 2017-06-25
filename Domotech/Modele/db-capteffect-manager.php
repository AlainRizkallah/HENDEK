<?php
    require_once("connexion.php");

    function addCaptToList($db,$type,$prix,$unite){
      try{//TODO: ajouter le champs nom ?
      $stmt = $db->prepare('INSERT INTO `liste_capteur` (`type` , `prix`,`unite` ) VALUES (:type , :prix,:unite) ');
      $stmt->bindParam(':type',$type);
      $stmt->bindParam(':prix',$prix);
      $stmt->bindParam(':unite',$unite);
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


  function addEffToList($db,$type,$prix){
    try{
    $stmt = $db->prepare('INSERT INTO `liste_effecteur` (`type` , `prix`) VALUES (:type , :prix) ');
    $stmt->bindParam(':type',$type);
    $stmt->bindParam(':prix',$prix);
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

  function getCaptList($db){

    $reponse = $db->prepare('SELECT type,prix,unite FROM liste_capteur');
    $reponse->execute();
    return $reponse;
}

function getEffList($db){

  $reponse = $db->prepare('SELECT type,prix FROM liste_effecteur ');
  $reponse->execute();
  return $reponse;
}

?>
