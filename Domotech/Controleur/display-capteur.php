<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
   if(!empty($_POST['salle'])){
    include("../Modele/db-capteur-manager.php");
    showAll($db,$_POST['salle'],$_POST['salleNom']);
  }else if (!empty($_POST['detailId'])){
    include("../Modele/db-capteur-manager.php");
    showDetail($db,$_POST['detailId'],$_POST['capteurNom']);

  }
}
function showDetail($db,$id,$nomCapteur){
  echo '<span class=boxtitle>'.$nomCapteur.'</span class=boxtitle> <br><br>';

}


function showAll($db,$salle,$nomSalle){
    $result = getCapteursList($db,$salle);
  $nomSalle = str_replace("_"," ",$nomSalle);
    if ($result->rowcount()>0) {
      //DO::FETCH_ASSOC met le résultat dans un tableau associatif

      echo '<span class=boxtitle>'.$nomSalle.'</span class=boxtitle> <br><br>';
      echo "<div class='boxCapteur'>";

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
          $params = "detailId=".$row['id']."&capteurNom=". $row['type'];
          if($row['etat']==1){
            echo "<a class='boxCapteurElement boxElementMarche' href='#'>";

            echo "<p>Actif</p>";
          }else{
            ?><a class='boxCapteurElement boxElementArret' onclick= envoiePhP("<?php echo($params)?>",'Controleur/display-capteur.php')>
            <?php echo "<p>Inactif</p>";
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
