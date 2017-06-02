<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
   if(!empty($_POST['salle'])){
    include("../Modele/db-effecteur-manager.php");


    showAll($db,$_POST['salle'],$_POST['salleNom']);
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
          if($row['etat']==1){
            echo "<a class='boxCapteurElement boxElementMarche' href='#'>";
            echo "<p>Actif</p>";
          }else{
            echo "<a class='boxCapteurElement boxElementArret' href='#'>";
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
            echo "</a>";
        }
        echo "</div>";
    } else {
        echo "Pas encore de capteurs installés";
    }

  }
?>
