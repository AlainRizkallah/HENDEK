<?php
require_once("connexion.php");

function getNews($db){
$reponse = $db->prepare('SELECT ID , contenu , titre FROM news
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
