<?php
require_once("connexion.php");

function getNews($db){
$reponse = $db->prepare('SELECT ID , contenu , titre , news.date datee FROM news
  ORDER BY ID DESC'
);
$reponse->execute();
  return $reponse;
}

function delNews($db,$idNews){
    try{
      $stmt = $db->prepare('DELETE FROM `news` WHERE `ID`=:idNews');
      $stmt->bindParam(':idNews',$idNews);
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

    function addNews($db, $titre, $contenu){
    	try{
    $stmt =   $db->prepare('INSERT INTO `news` (`titre`,`contenu` , `date`) VALUES (:titre, :contenu , NOW()) ');
    $stmt ->bindParam(':titre',$titre);
    $stmt ->bindParam(':contenu',$contenu);
    $stmt->execute() or die(print_r($stmt ->errorInfo(), true));
    $res="fait";
    }
    catch (Exception $e)
    {

    	die('Erreur : ' . $e->getMessage());
    	$res= $e->getMessage();
    }
  }

    ?>
