<?php


if($_SERVER['REQUEST_METHOD'] === 'POST') {

   if(isset($_POST['btnAddEffecteur'])){
     dispAddEffecteur();
  }

  if(isset($_POST['maison'])){
    dispSuppEffecteur();
 }

}

function dispAddEffecteur(){
  include("../Modele/db-effecteur-manager.php");
  session_start();
  $resultat = addEffecteur($db,$_POST['piece'],$_SESSION['idMaison'],$_POST['type']);
  echo ($resultat);
  header ("Location: $_SERVER[HTTP_REFERER]" );
}
function dispSuppEffecteur(){

  include("../Modele/db-effecteur-manager.php");

  $resultat = delEffecteur($db, $_POST['maison']) ;
  echo ($resultat);

  header ("Location: $_SERVER[HTTP_REFERER]" ); // redirige l'utilisateur sur la page précédente
}

?>
