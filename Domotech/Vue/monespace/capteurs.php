<?php
include_once("Modele/db-maison-manager.php");
include_once("Modele/db-salle-manager.php");

 ?>
<script  async defer src="js/communicationPhp.js"></script>
<?php
if(isset($_SESSION['idMaison'])){
  $resultat=getSallesList($db, $_SESSION['idMaison']);
}

?><section>
<div class="dropdown left" >
    <h2> <span class=center> <button class="boutton gros">▼ Sélectionnez une salle pour en afficher ses capteurs ▼</button> </span></h2>

        <div class="dropdown-content">

          <?php
            while ($liste=$resultat->fetch()){
                $nom =  str_replace(" ","_",$liste['sal']);
                $params = "salle=".$liste['ID']."&salleNom=".$nom;

              ?>
              <button onclick= envoiePhP("<?php echo($params)?>",'Controleur/display-capteur.php') class="boutton"><?php echo($liste['sal']);?></button>
          <?php } $resultat->closeCursor();?>

        </div>
</div>
<div class="center">
    <h3 id="nomSalle"></h3>
    <div id="resultat" ></div>
</div>
</section>
