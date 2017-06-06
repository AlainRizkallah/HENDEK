<script  async defer src="js/communicationPhp.js"></script>
<?php
include_once("Modele/db-maison-manager.php");
include_once("Modele/db-salle-manager.php");

if(isset($_SESSION['idMaison'])){
  $resultat=getSallesList($db, $_SESSION['idMaison']);
  $titre = "Choisissez une maison";
  if(isset($_SESSION["nomMaison"])){
      $titre = "▼ Salles de la maison: ".$_SESSION["nomMaison"];
  }

}else{
  $resultat="";
  if(!isset($_SESSION["nomMaison"])){
   $titre = "▼ Salles de la maison: "."pas de maison";
  }

}
 ?>

<section>
<div class="dropdown" >
    <span class=center> <button class="boutton gros"><?php echo($titre); ?></button> </span>
        <div class="dropdown-content">
          <?php
          if(!empty($resultat)){
            while ($liste=$resultat->fetch()){
                $nom =  str_replace(" ","_",$liste['sal']);
                $params = "salle=".$liste['ID']."&salleNom=".$nom;
              ?>
              <button onclick= envoiePhP("<?php echo($params)?>",'Controleur/display-capteur.php') class="boutton"><?php echo($liste['sal']);?></button>
          <?php } $resultat->closeCursor();}?>
        </div>
</div>
<div class="conteneur center">
    <h4 id="nomSalle"></h4>
    <div id="resultat" ></div>
</div>
</section>
