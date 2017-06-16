<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
   if(!empty($_POST['salle'])){
    include_once("../Modele/db-effecteur-manager.php");


    showAll($db,$_POST['salle'],$_POST['salleNom']);
  }
  if (!empty($_POST['id'])){
    include_once("../Modele/db-effecteur-manager.php");
    $result = updateEffecteur($db,$_POST['id'],$_POST['etat']);
    if ($_POST['etat']==0){
      $state = "désactivé";
    }else{
      $state = "activé";
    }
    showAll($db,$_POST['numSalle'],$_POST['nomSalle']);
  }
}

function showAll($db,$salle,$nomSalle){
    $result = getEffecteursList($db,$salle);
  $nomSalle = str_replace("_"," ",$nomSalle);
    if ($result->rowcount()>0) {
      //DO::FETCH_ASSOC met le résultat dans un tableau associatif

      echo '<span class=boxtitle>'.$nomSalle.'</span class=boxtitle> <br><br>';
      echo "<div class='boxCapteur'>";

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
          $params="id=".$row['ID']."&numSalle=".$salle."&nomSalle=".$nomSalle;
          if($row['etat']==1){
              $params =  $params."&etat=0";
            ?>
            <button id="<?php echo($row['id'])?>" onclick= envoiePhP("<?php echo($params)?>",'Controleur/display-effecteur.php') class='boxCapteurElement boxElementMarche'>
            <?php
            echo "<p>Actif</p>";
          }else{
              $params =  $params."&etat=1";
            ?>
            <button id="<?php echo($row['id'])?>" onclick= envoiePhP("<?php echo($params)?>",'Controleur/display-effecteur.php') class='boxCapteurElement boxElementArret' >
            <?php
            echo "<p>Inactif</p>";
          }

            echo "<p>" . $row['type'] . "</p>";
            $unit="";
            switch ($row['type']) {
              case 'Température':
              $unit = "°C";

                break;

              default:
                  $unit = "";
                break;
            }
//            echo "<p>" . $row['valeur'] .$unit. "</p>";



          echo "</button>";
        }
        echo "</div>";
    } else {
        echo "Pas encore d'effecteurs installés";
    }

  }
?>
