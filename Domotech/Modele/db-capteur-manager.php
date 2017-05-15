<?php
    require_once("connexion.php");


    function getCapteur($db,$ID){
        $reponse = $db->query('SELECT type,valeur, etat FROM capteur WHERE ID="'.$ID.'"');
        return $reponse;
    }


    function getCapteursList($db,$idSalle){
        $reponse = $db->query('SELECT type FROM capteur WHERE idSalle="'.$idSale.'"');
        return $reponse;
    }

    function capterExist($db,$identifiant){
      $reponse = $db->query('SELECT COUNT(*) FROM capteur WHERE identifiant="'.$ID.'"');

      return $reponse;
      }


      function addCapteur($db,$idSalle,$idMaison,$type){
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
