<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {

   if(isset($_POST['delNews'])){
     include("../Modele/db-news-manager.php");
     $resultat = delNews($db , $_POST['delNews']);
     echo ($resultat);
     header ("Location: $_SERVER[HTTP_REFERER]" );
  }


  function supprNews(){

  }

}
?>
