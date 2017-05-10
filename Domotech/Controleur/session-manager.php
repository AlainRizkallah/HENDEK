<?php
    session_start();
    //require("Modele/connexion.php");


    if(!isset($_SESSION["userID"])){ // L'utilisateur n'est pas connecté
        include("Controleur/test-connexion.php");
        include('Vue/login.php');
    } else if ($_GET['cible'] == "deconnexion"){// A changer, utiliser un btn
                // Détruit toutes les variables de session
                $_SESSION = array();
                if (isset($_COOKIE[session_name()])) {
                    setcookie(session_name(), '', time()-42000, '/');
                }
                session_destroy();
                //include("Vue/non_connecte.php");/A changer: recharger la page sans être connecté
              }
