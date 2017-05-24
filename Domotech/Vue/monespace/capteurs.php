<?php
include_once("Modele/db-maison-manager.php");
include_once("Modele/db-salle-manager.php");

 ?>
<script  async defer src="js/showElement.js"></script>
<?php   $resultat=getSalleList($db, $_SESSION['idGroupe']);//Mettre idMaison
?>
<div class="dropdown left" >
      <button class="boutton">Sélection de la Salle:</button>

        <div class="dropdown-content">

          <?php
            while ($liste=$resultat->fetch()){?>
              <button onclick= showCapteurs(<?php echo($liste['ID']);?>,'Controleur/display-capteur.php') class="boutton"><?php echo($liste['sal']);?></button>
          <?php } $resultat->closeCursor();?>

        </div>

</div>
<div class=" center">
    <h2 id="nomSalle"></h2>
    <div id="resultat" ></div>
</div>
