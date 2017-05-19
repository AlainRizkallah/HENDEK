<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
   if(!empty($_POST['salle'])){
    include("../Modele/db-capteur-manager.php");


    showAll($db,$_POST['salle']);
  }
}



function showAll($db,$salle){
    $result = getCapteursList($db,$salle);


    echo"<table border='1'>
    <tr>
    <th>Capteur</th>
    <th>Valeur</th>
    <th>Etat</th>
    <th>Date</th>
    </tr>";

    if ($result->rowcount()>0) {
      //DO::FETCH_ASSOC met le résultat dans un tableau associatif
      //TODO Changer la mise en forme du résultat ?

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
        echo "0 results";
    }

  }
?>
