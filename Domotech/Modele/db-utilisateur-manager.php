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

    function userExist($db,$identifiant){
      $reponse = $db->query('SELECT COUNT(*) FROM Utilisateurs WHERE identifiant="'.$identifiant.'"');

      return $reponse;
      }


      function addUser($db,$identifiant,$mdp,$email,$nom,$prenom,$tel){
        try{
        $db->query('INSERT INTO `utilisateurs` (`identifiant`, `mdp`, `id`,`email`,`nom`,`prenom`,`tel`) VALUES ("'.$identifiant.'", MD5("'.$mdp.'"), NULL,"'.$email.'","'.$nom.'","'.$prenom.'","'.$tel.'") ') or die(print_r($db->errorInfo(), true));$res="fait";
    }
    catch (Exception $e)
{

        die('Erreur : ' . $e->getMessage());
        $res= $e->getMessage();
}


      return $res;
    }

?>
