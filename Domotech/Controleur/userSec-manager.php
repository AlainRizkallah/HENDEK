<?php
 // TODO FAIRE SUR LES AUTRES MANAGER

if($_SERVER['REQUEST_METHOD'] === 'POST') {

   if(isset($_POST['btnAddUserSec'])){
     dispAddUserSec();
  }

  if((isset($_POST['btnDelUserSec'])) ){
    dispDelUserSec();
 }
 if((isset($_POST['delUserSecBis'])) ){
   dispDelUserSecBis();
}

}

function dispAddUserSec(){
  include("../Modele/db-utilisateur-manager.php");
  session_start();
  $resultat = addUserSec($db, $_POST['username'] ,$_POST['mdp'],$_POST['statut'], $_SESSION['idGroupe']);
  echo ($resultat);
    header ("Location: ../monespace.php?cible=monespace/utilisateurs.php&addel=add" );
}
function dispDelUserSec(){
  include("../Modele/db-utilisateur-manager.php");

  $resultat = delUserSec($db, $_POST['btnDelUserSec']) ;
  echo ($resultat);

  header ("Location: ../monespace.php?cible=monespace/utilisateurs.php&addel=del" );
}
function dispDelUserSecBis(){
  include("../Modele/db-utilisateur-manager.php");

  $resultat = delUserSec($db, $_POST['delUserSecBis']) ;
  echo ($resultat);

  header ("Location: ../accueiladmin.php?cible=accueiladmin/users.php&addel=del" );
}


?>
