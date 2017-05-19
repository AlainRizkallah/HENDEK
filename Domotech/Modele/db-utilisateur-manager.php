<?php
    require_once("connexion.php");


    function mdp($db,$identifiant){
        $reponse = $db->prepare('SELECT id, mdp FROM Utilisateurs WHERE identifiant= :identifiant');
        $reponse->bindParam(':identifiant',$identifiant);
        $reponse->execute();
      return   $reponse;
    }


    function utilisateurs($db){
        $reponse = $db->query('SELECT identifiant FROM Utilisateurs');
        return $reponse;
    }

    function userExist($db,$identifiant){
      $reponse = $db->prepare('SELECT COUNT(*) FROM Utilisateurs WHERE identifiant= :identifiant');

      $reponse->bindParam(':identifiant',$identifiant);

      $reponse->execute() or die(print_r(  $reponse ->errorInfo(), true));
      return $reponse;
      }

      function addUser($db,$identifiant,$mdp,$email,$nom,$prenom,$tel){
        try{
      $stmt =   $db->prepare('INSERT INTO `utilisateurs` (`identifiant`, `mdp`, `id`,`email`,`nom`,`prenom`,`tel`) VALUES (:identifiant, :mdp, NULL,:email,:nom,:prenom,:tel) ');
      $mdp = MD5($mdp);
      $stmt ->bindParam(':identifiant',$identifiant);
      $stmt ->bindParam(':mdp',$mdp);
      $stmt ->bindParam(':email',$email);
      $stmt ->bindParam(':nom',$nom);
      $stmt ->bindParam(':prenom',$prenom);
      $stmt ->bindParam(':tel',$tel);
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

?>
