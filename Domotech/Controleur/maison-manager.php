<?php


if($_SERVER['REQUEST_METHOD'] === 'POST') {

   if(isset($_POST['btnAddMaison'])){
     dispAddMaison();
  }

  if(isset($_POST['btnSuppMaison'])){
    dispSuppMaison();
 }

}

function dispAddMaison(){
  include("../Modele/db-maison-manager.php");
  session_start();

  $resultat = addHabitation($db,$_POST['adresse'],$_POST['nom'], $_POST['superficie'],$_SESSION["idGroupe"]);
  header ("Location: $_SERVER[HTTP_REFERER]" ); // redirige l'utilisateur sur la page précédente
}
function dispSuppMaison(){
  include("../Modele/db-maison-manager.php");

  $resultat = delHabitation($db, $_POST['delHabitation']) ;
  echo ($resultat);

  header ("Location: $_SERVER[HTTP_REFERER]" ); // redirige l'utilisateur sur la page précédente
}

?>
