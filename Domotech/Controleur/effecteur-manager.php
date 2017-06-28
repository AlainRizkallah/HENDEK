<?php


if($_SERVER['REQUEST_METHOD'] === 'POST') {

   if(isset($_POST['btnAddEffecteur'])){
     dispAddEffecteur();
  }

  if(isset($_POST['maison'])){
    dispSuppEffecteur();
 }
 if(isset($_POST['maisonAdmin'])){
   dispSuppEffecteurAdmin();
 }
}

function dispAddEffecteur(){
  include("../Modele/db-effecteur-manager.php");
  session_start();
  $resultat = addEffecteur($db,$_POST['piece'],$_SESSION['idMaison'],$_POST['type']);
  echo ($resultat);
  header ("Location: ../monespace.php?cible=monespace/ajoutcapteurs.php&addel=addeff" );
}
function dispSuppEffecteur(){

  include("../Modele/db-effecteur-manager.php");

  $resultat = delEffecteur($db, $_POST['maison']) ;
  echo ($resultat);

  header ("Location: ../monespace.php?cible=monespace/ajoutcapteurs.php&addel=deleff" );
}
function dispSuppEffecteurAdmin(){

  include("../Modele/db-effecteur-manager.php");

  $resultat = delEffecteur($db, $_POST['maisonAdmin']) ;
  echo ($resultat);

    header ("Location: ../accueiladmin.php?cible=accueiladmin/users.php&addel=deleff" );
}

?>
