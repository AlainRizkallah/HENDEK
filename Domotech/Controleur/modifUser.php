<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {

   if(isset($_POST['btnModMail'])){
     majMail();
  }
  if(isset($_POST['btnModTel'])){
    majTel();
 }

}
function majMail(){
  include("../Modele/db-utilisateur-manager.php");
  session_start();
  $resultat = setMail($db , $_POST['modMail'] , $_SESSION['userID']);
  echo ($resultat);
  header ("Location: $_SERVER[HTTP_REFERER]" );
}

function majTel(){
  include("../Modele/db-utilisateur-manager.php");
  session_start();
  $resultat = setTel($db , $_POST['modTel'] , $_SESSION['userID']);
  echo ($resultat);
  header ("Location: $_SERVER[HTTP_REFERER]" );
}
