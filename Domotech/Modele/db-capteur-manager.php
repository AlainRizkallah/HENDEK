<?php
    require_once("connexion.php");


    function getCapteur($db,$ID){
        $reponse = $db->query('SELECT type,valeur, etat FROM capteur WHERE ID="'.$ID.'"');
        return $reponse;
    }


    function getCapteursList($db,$idSalle){
        $reponse = $db->query('SELECT type FROM capteur WHERE idSalle="'.$idSalle.'"');
        return $reponse;
    }

    function capterExist($db,$identifiant){
      $reponse = $db->query('SELECT COUNT(*) FROM capteur WHERE ID="'.$identifiant.'"');

      return $reponse;
      }


      function addCapteur($db,$idSalle,$idMaison,$type){
        try{//TODO: ajouter le champs nom ?
        $db->query('INSERT INTO `capteur` (`idSalle`, `idHabitation`,`type`) VALUES ("'.$idSalle.'","'.$idMaison.'","'.$type.'") ') or die(print_r($db->errorInfo(), true));$res="fait";
    }
    catch (Exception $e)
{

        die('Erreur : ' . $e->getMessage());
        $res= $e->getMessage();
}


      return $res;
    }

?>
