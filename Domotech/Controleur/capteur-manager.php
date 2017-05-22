<?php


if($_SERVER['REQUEST_METHOD'] === 'POST') {
   if(isset($_POST['addCapteur'])){
     include("../Modele/db-capteur-manager.php");
     dispAddCapteur();




  }
}

function dispAddCapteur(){
  include("../Modele/db-capteur-manager.php");
  $resultat = addCapteur($db,$_POST['piece'],$_POST['maison'],$_POST['type']);
  echo ($resultat);
  header ("Location: $_SERVER[HTTP_REFERER]" );
}
//submitAddCapteur
?>
