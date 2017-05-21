<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
   if(!empty($_POST['salle'])){
    include("../Modele/db-capteur-manager.php");


    showAll($db,$_POST['salle']);
  }
}



function showAll($db,$salle){
    $result = getCapteursList($db,$salle);




    if ($result->rowcount()>0) {
      //DO::FETCH_ASSOC met le résultat dans un tableau associatif
    /*  echo"<table>
      <tr class='tableTitre'>
      <td>Capteur</td>
      <td>Valeur</td>
      <td>Etat</td>
      <td>Date</td>
      </tr>";*/
      echo '<h2>Salle '.$salle.'</h2>';
      echo "<div class='boxCapteur'>";

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
          if($row['etat']==1){
            echo "<div class='boxCapteurElement boxElementMarche'>";
            echo "<p>Actif</p>";
          }else{
            echo "<div class='boxCapteurElement boxElementArret'>";
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
            echo "<p>" . $row['valeur'] .$unit. "</p>";


            echo "<p>" . $row['temps'] . "</p>";
            echo "</div>";
        }
        echo "</div>";
    } else {
        echo "Pas encore de capteurs installés";
    }

  }
?>
