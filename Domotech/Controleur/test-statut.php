<?php
include_once('Modele/db-utilisateur-manager.php');
$reponse=getStatut($db,$_SESSION['userID']);
$ligne = $reponse->fetch(); ?>
