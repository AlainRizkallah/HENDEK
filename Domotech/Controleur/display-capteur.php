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
      echo"<table>
      <tr class='tableTitre'>
      <td>Capteur</td>
      <td>Valeur</td>
      <td>Etat</td>
      <td>Date</td>
      </tr>";

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['type'] . "</td>";
            $unit="";
            switch ($row['type']) {
              case 'Température':
              $unit = "°C";

                break;

              default:
                  $unit = "";
                break;
            }
            echo "<td>" . $row['valeur'] .$unit. "</td>";
            if($row['etat']==1){
              echo "<td>Actif</td>";
            }else{
              echo "<td>Inactif</td>";
            }

            echo "<td>" . $row['temps'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Pas encore de capteurs installés";
    }

  }
?>
