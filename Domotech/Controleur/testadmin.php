<?php
session_start();
include('../Modele/db-utilisateur-manager.php');
$reponse=userAdmin($db,$_SESSION['userID']);
$ligne = $reponse->fetch();
if($ligne['status']=='admin')
{
  include('../accueiladmin.php');
}?>
