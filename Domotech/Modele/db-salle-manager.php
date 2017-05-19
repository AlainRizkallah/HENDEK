<?php
    require_once("connexion.php");


    function getSalle($db,$ID){


        $reponse = $db->prepare('SELECT nom,nbCapteur,nbActionneur,temps FROM salle WHERE ID=:ID');
        $reponse->bindParam(':ID',$ID);
        $reponse->execute();
        return $reponse;
    }


    function getSallesList($db,$idHabitation){
      //  $reponse = $db->prepare('SELECT type,valeur,etat,temps FROM capteur WHERE idSalle=:idSalle');
$reponse = $db->prepare('SELECT nom,nbCapteur,nbActionneur,temps FROM salle WHERE idHabitation=:idHabitation');

        $reponse->bindParam(':idHabitation',$idHabitation);
        $reponse->execute();
        return $reponse;
    }

    function salleExist($db,$identifiant){
      $reponse = $db->prepare('SELECT COUNT(*) FROM salle WHERE ID=:ID');
      $reponse->bindParam(':ID',$ID);
      $reponse->execute();

      return $reponse;
      }


      function addSalle($db,$idHabitation,$nom){
        try{//TODO: ajouter le champs nom ?
        $stmt = $db->prepare('INSERT INTO `salle` (`idHabitation`,`nom`) VALUES (:idHabitation,:nom) ');
        $stmt->bindParam(':idHabitation',$idHabitation);
        $stmt->bindParam(':nom',$nom);
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

    function delSalle($db,$idSalle){
         try{//TODO: ajouter le champs nom ?
         $stmt = $db->prepare('DELETE FROM `salle` WHERE `ID`=:idSalle');
         $stmt->bindParam(':idSalle',$idSalle);
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
