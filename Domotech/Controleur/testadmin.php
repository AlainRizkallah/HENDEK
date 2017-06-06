  <link rel="stylesheet" href="../Vue/Styles/style1.css" >
<?php
session_start();
include('../Modele/db-utilisateur-manager.php');
$reponse=userAdmin($db,$_SESSION['userID']);
$ligne = $reponse->fetch();
if($ligne['status']=='admin')
{
  include('../accueiladmin.php');
}
else{
  echo('tes pas admin connard casse toi');
}?>
