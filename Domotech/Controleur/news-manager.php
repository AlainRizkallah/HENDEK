<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {

   if(isset($_POST['delNews'])){
     include("../Modele/db-news-manager.php");
     $resultat = delNews($db , $_POST['delNews']);
     echo ($resultat);
     header ("Location: $_SERVER[HTTP_REFERER]" );
  }

  if(isset($_POST['addNews'])){
    include("../Modele/db-news-manager.php");
    $resultat = addNews($db , $_POST['titrenews'], $_POST['contenunews'] );
    echo ($resultat);
    header ("Location: $_SERVER[HTTP_REFERER]" );
 }

}
?>
