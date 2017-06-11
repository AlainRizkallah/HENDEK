<?php
    require_once("connexion.php");

    function addCaptToList($db,$capteurs){
      try{//TODO: ajouter le champs nom ?
      $stmt = $db->prepare('INSERT INTO `capteffect` (`capteurs` , `effecteurs` ) VALUES (:capteurs , "non") ');
      $stmt->bindParam(':capteurs',$capteurs);
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


  function addEffToList($db,$effecteurs){
    try{//TODO: ajouter le champs nom ?
    $stmt = $db->prepare('INSERT INTO `capteffect` (`effecteurs` , `capteurs`) VALUES (:effecteurs , "non") ');
    $stmt->bindParam(':effecteurs',$effecteurs);
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

    $reponse = $db->prepare('SELECT capteurs FROM capteffect WHERE effecteurs="non"');
    $reponse->execute();
    return $reponse;
}

function getEffList($db){

  $reponse = $db->prepare('SELECT effecteurs FROM capteffect WHERE capteurs="non"');
  $reponse->execute();
  return $reponse;
}

?>
