<?php


if($_SERVER['REQUEST_METHOD'] === 'POST') {
  session_start();
 if(isset($_POST['maisonId'])){
   $_SESSION["idMaison"] = $_POST['maisonId'];

   if(isset($_POST['nomMaison'])){
     $nomMaison = $_POST['nomMaison'];
     $nomMaison = str_replace("_"," ",$nomMaison);
     $_SESSION["nomMaison"] = $nomMaison;
   }
   header('Location:'.$_SERVER['PHP_SELF']);

 }
   if(isset($_POST['btnAddMaison'])){
     dispAddMaison();
  }

  if( (isset($_POST['btnSuppMaison'])) or isset($_POST['delHabitation'])  ){
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
