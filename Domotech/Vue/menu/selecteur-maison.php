<?php
include_once("Modele/db-maison-manager.php");

$reponse = getHabitationsList($db,  $_SESSION["idGroupe"]);
//TODO personnaliser la fonction dans le onClick
 ?>
<div class="dropdown" >
      <button class="boutton">Choix de la Maison:</button>

        <div class="dropdown-content">

          <?php
            while ($liste=$reponse->fetch()){?>
              <button onclick= showCapteurs(<?php //echo($liste['ID']);?>,'Controleur/display-capteur.php') class="boutton"><?php echo($liste['nom']);?></button>
          <?php } $reponse->closeCursor();?>

        </div>

</div>
