<?php
    session_start();
include('Vue/login.php');

//TODO a supprimer en production
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
//TODO sert pour le débug du css

    if(!isset($_SESSION["userID"])){ // L'utilisateur n'est pas connecté
        include("Controleur/test-connexion.php");

    } else {

              if(isset($_POST['btnDeco']) ){
                $_SESSION = array();
                  if (isset($_COOKIE[session_name()])) {
                      setcookie(session_name(), '', time()-42000, '/');
                  }
                    // Détruit toutes les variables de session
                  session_destroy();
                  //refresh la page
                  header('Location: index.php');
                  die;
              }
            }
