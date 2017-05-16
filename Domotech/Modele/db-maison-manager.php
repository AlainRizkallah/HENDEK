<?php
    require_once("connexion.php");


    function getMaison($db,$ID){
        $reponse = $db->query('SELECT type,valeur, etat FROM habitation WHERE ID="'.$ID.'"');
        return $reponse;
    }
    //TODO use prepare
  //  prepare('SELECT * FROM users where username = :username');


    function getHabitationsList($db,$idSalle){
      //$reponse = $db->query('SELECT type FROM habitation WHERE idSalle="'.$idSale.'"');
        return $reponse;
    }

    function capterExist($db,$identifiant){
      $reponse = $db->query('SELECT COUNT(*) FROM habitation WHERE ID="'.$identifiant.'"');

      return $reponse;
      }


      function addHabitation($db,$adresse,$nbSalle,$superficie){
        try{
          $db->query('INSERT INTO `habitation` (`adresse`, `nbSalle`,`superficie`) VALUES ("'.$iadresse.'","'.$nbSalle.'","'.$superficie.'") ') or die(print_r($db->errorInfo(), true));$res="fait";
      }
    catch (Exception $e)
{

        die('Erreur : ' . $e->getMessage());
        $res= $e->getMessage();
}


      return $res;
    }

?>
