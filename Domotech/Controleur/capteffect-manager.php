<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {

   if(isset($_POST['addCapt'])){
     include("../Modele/db-capteffect-manager.php");
     $res=addCaptToList($db , $_POST['type'],$_POST['prix'],$_POST['unite']);
     header ("Location: $_SERVER[HTTP_REFERER]" );
  }

  if(isset($_POST['addEffect'])){
    include("../Modele/db-capteffect-manager.php");

      $res=addEffToList($db , $_POST['type'],$_POST['prix']);
      header ("Location: $_SERVER[HTTP_REFERER]" );

 }
 if(isset($_POST['delCapt'])){
   include("../Modele/db-capteffect-manager.php");
   $res=delCapt($db, $_POST['delCapt']);
   header ("Location: $_SERVER[HTTP_REFERER]" );

}
if(isset($_POST['delEffect'])){
  include("../Modele/db-capteffect-manager.php");
  $res=delEffect($db, $_POST['delEffect']);

    header ("Location: $_SERVER[HTTP_REFERER]" );

}

}
