<?php
    require_once("connexion.php");


    function getMaison($db,$ID){
        $reponse = $db->prepare('SELECT type,valeur, etat FROM habitation WHERE ID=:ID');
        $reponse->bindParam(':ID',$ID);
        $reponse->execute();
        return $reponse;
    }
    //TODO use prepare
  //  prepare('SELECT * FROM users where username = :username');


    function getHabitationsList($db,$idSalle){
      $reponse = $db->prepare('SELECT type FROM habitation WHERE idSalle= :idSalle');
      $reponse->bindParam(':idSalle',$idSalle);
      $reponse->execute();
        return $reponse;
    }

    function capterExist($db,$identifiant){
      $reponse = $db->prepare('SELECT COUNT(*) FROM habitation WHERE ID=:identifiant');
      $reponse->bindParam(':identifiant',$identifiant);
      $reponse->execute();

      return $reponse;
      }


      function addHabitation($db,$adresse,$nom,$superficie){
        try{
          $stmt = $db->prepare('INSERT INTO `habitation` (`adresse`, `nom`,`superficie`) VALUES (:adresse,:nom,:superficie) ');
          $stmt->bindParam(':adresse',$adresse);
          $stmt->bindParam(':nom',$nom);
          $stmt->bindParam(':superficie',$superficie);
          $stmt->execute() or die(print_r($stmt ->errorInfo(), true));
          $res="fait";

      }
    catch (Exception $e)
{

        die('Erreur : ' . $e->getMessage());
        $res= $e->getMessage();
}


      return $res;
    }
    function delHabitation($db,$idHabitation){
          try{//TODO: ajouter le champs nom ?
          $stmt = $db->prepare('DELETE FROM `habitation` WHERE `ID`=:idHabitation');
          $stmt->bindParam(':idHabitation',$idHabitation);
          $stmt->execute() or die(print_r($stmt->errorInfo(), true));
          $res="fait";
        }
        catch (Exception $e)
        {
          die('Erreur : ' . $e->getMessage());
          $res= $e->getMessage();
        }
        return $res;
        }


?>
