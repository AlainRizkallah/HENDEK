<?php
    require_once("connexion.php");


    function getCapteurHistorique($db,$ID){


        $reponse = $db->prepare('SELECT valeur,temps FROM capteurMesure WHERE ID=:ID');
        $reponse->bindParam(':ID',$ID);
        $reponse->execute();
        return $reponse;
    }

    function getCapteurGroupList($db,$idGroupe){

    $reponse=$db->prepare('SELECT habitation.nom hab , salle.nom sal , capteur.type capt , capteur.ID ID FROM habitation
    JOIN salle ON habitation.ID=salle.idHabitation
    JOIN capteur ON salle.ID=capteur.idSalle WHERE idGroupe=:idGroupe');
    $reponse->bindParam(':idGroupe', $idGroupe);
    $reponse->execute();
    return $reponse;
    }


    function getCapteursList($db,$idSalle){
      //  $reponse = $db->prepare('SELECT type,valeur,etat,temps FROM capteur WHERE idSalle=:idSalle');
$reponse = $db->prepare('SELECT type,valeur,etat,temps,id FROM capteur WHERE idSalle=:idSalle');

        $reponse->bindParam(':idSalle',$idSalle);
        $reponse->execute();
        return $reponse;
    }

    function getCapteursMaisonList($db,$idMaison){
            $reponse = $db->prepare('SELECT type,valeur,etat,temps FROM capteur WHERE idHabitation=:idMaison');

            $reponse->bindParam(':idMaison',$idMaison);
            $reponse->execute();
            return $reponse;
        }

    function capterExist($db,$identifiant){
      $reponse = $db->prepare('SELECT COUNT(*) FROM capteur WHERE ID=:ID');
      $reponse->bindParam(':ID',$ID);
      $reponse->execute();

      return $reponse;
      }

      function addCapteur($db,$idSalle,$idMaison,$type){
        try{//TODO: ajouter le champs nom ?
        $stmt = $db->prepare('INSERT INTO `capteur` (`idSalle`, `idHabitation`,`type`) VALUES (:idSalle,:idMaison,:type) ');
        $stmt->bindParam(':idSalle',$idSalle);
        $stmt->bindParam(':idMaison',$idMaison);
        $stmt->bindParam(':type',$type);
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

    function delCapteur($db,$idCapteur){
      try{//TODO: ajouter le champs nom ?
      $stmt = $db->prepare('DELETE FROM `capteur` WHERE `ID`=:idCapteur');
      $stmt->bindParam(':idCapteur',$idCapteur);
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
