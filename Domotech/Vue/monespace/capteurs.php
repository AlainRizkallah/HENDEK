<?php
include_once("Modele/db-maison-manager.php");
include_once("Modele/db-salle-manager.php");

 ?>
<script  async defer src="js/communicationPhp.js"></script>
<?php
if(isset($_SESSION['idMaison'])){
  $resultat=getSalleList($db, $_SESSION['idMaison']);
}

?>
<div class="dropdown left" >
      <button class="boutton">Sélection de la Salle ▼</button>

        <div class="dropdown-content">

          <?php
            while ($liste=$resultat->fetch()){
                $params = "salle=".$liste['ID'];
              ?>
              <button onclick= envoiePhP("<?php echo($params)?>",'Controleur/display-capteur.php') class="boutton"><?php echo($liste['sal']);?></button>
          <?php } $resultat->closeCursor();?>

        </div>

</div>
<div class=" center">
    <h2 id="nomSalle"></h2>
    <div id="resultat" ></div>
</div>
