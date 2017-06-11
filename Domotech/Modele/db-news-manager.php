<?php
require_once("connexion.php");

function getNews($db){
$reponse = $db->prepare('SELECT contenu , titre FROM news
  ORDER BY ID DESC'
);
$reponse->execute();
  return $reponse;
}
