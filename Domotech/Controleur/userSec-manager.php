<?php
 // TODO FAIRE SUR LES AUTRES MANAGER

if($_SERVER['REQUEST_METHOD'] === 'POST') {

   if(isset($_POST['btnAddUserSec'])){
     dispAddUserSec();
  }

  if(isset($_POST['btnDelUserSec'])){
    dispDelUserSec();
 }

}

function dispAddUserSec(){
include("../Modele/db-utilisateur-manager.php");
  $resultat = addUserSec($db, $_POST['username'] ,$_POST['mdp'],$_POST['statut'], $_SESSION['idGroupe']);
  echo ($resultat);
  header ("Location: $_SERVER[HTTP_REFERER]" );
}
function dispDelUserSec(){
  include("../Modele/db-utilisateur-manager.php");

  $resultat = delUserSec($db, $_POST['btnDelUserSec']) ;
  echo ($resultat);

  header ("Location: $_SERVER[HTTP_REFERER]" ); // redirige l'utilisateur sur la page précédente
}


?>
