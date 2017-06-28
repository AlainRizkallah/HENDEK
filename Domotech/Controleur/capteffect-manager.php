<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {

   if(isset($_POST['addCapt'])){
     include("../Modele/db-capteffect-manager.php");
     $res=addCaptToList($db , $_POST['type'],$_POST['prix'],$_POST['unite']);
     header ("Location: ../accueiladmin.php?cible=accueiladmin/capteffect.php&addel=addcap" );
  }

  if(isset($_POST['addEffect'])){
    include("../Modele/db-capteffect-manager.php");

      $res=addEffToList($db , $_POST['type'],$_POST['prix']);
      header ("Location: ../accueiladmin.php?cible=accueiladmin/capteffect.php&addel=addeff" );

 }
 if(isset($_POST['delCapt'])){
   include("../Modele/db-capteffect-manager.php");
   $res=delCapt($db, $_POST['delCapt']);
   header ("Location: ../accueiladmin.php?cible=accueiladmin/capteffect.php&addel=delcap" );

}
if(isset($_POST['delEffect'])){
  include("../Modele/db-capteffect-manager.php");
  $res=delEffect($db, $_POST['delEffect']);

    header ("Location: ../accueiladmin.php?cible=accueiladmin/capteffect.php&addel=deleff" );

}

}
