<?php
    require("connexion.php");

    
    function mdp($db,$identifiant){
        $reponse = $db->query('SELECT id, mdp FROM Utilisateurs WHERE identifiant="'.$identifiant.'"');
        return $reponse;
    }


    function utilisateurs($db){
        $reponse = $db->query('SELECT identifiant FROM Utilisateurs');
        return $reponse;
    }


?>
