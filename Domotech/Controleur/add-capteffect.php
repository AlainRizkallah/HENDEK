<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {

   if(isset($_POST['addCapt'])){
     include("../Modele/db-capteffect-manager.php");
     $res=addCaptToList($db , $_POST['capteur']);
     header ("Location: $_SERVER[HTTP_REFERER]" );
  }

  if(isset($_POST['addEffect'])){
    include("../Modele/db-capteffect-manager.php");
    $res=addEffToList($db , $_POST['effecteur']);
    header ("Location: $_SERVER[HTTP_REFERER]" );

 }

}
