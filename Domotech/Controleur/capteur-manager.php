<?php


if($_SERVER['REQUEST_METHOD'] === 'POST') {

   if(isset($_POST['btnAddCapteur'])){
     dispAddCapteur();
  }

  if(isset($_POST['btnSuppCapteur'])){
    dispSuppCapteur();
 }

}

function dispAddCapteur(){
  include("../Modele/db-capteur-manager.php");
  $resultat = addCapteur($db,$_POST['piece'],$_POST['maison'],$_POST['type']);
  echo ($resultat);
  header ("Location: $_SERVER[HTTP_REFERER]" );
}
function dispSuppCapteur(){

  include("../Modele/db-capteur-manager.php");

  $resultat = delCapteur($db, $_POST['maison']) ;
  echo ($resultat);

  header ("Location: $_SERVER[HTTP_REFERER]" ); // redirige l'utilisateur sur la page précédente
}

?>
