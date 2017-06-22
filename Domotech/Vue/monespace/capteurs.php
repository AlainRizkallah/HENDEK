<?php
include_once("Modele/db-maison-manager.php");
include_once("Modele/db-salle-manager.php");

 ?>
<script async defer type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script async defer type="text/javascript" src="js/drawCharts.js"> </script>
<script async defer type="text/javascript" src="js/communicationPhp.js"></script>



<!-- CAPTEURS -->
<div class="conteneurBloc n2 left">
<h2> Etat des capteurs </h2>

<?php
if(isset($_SESSION['idMaison'])){
  $resultat=getSallesList($db, $_SESSION['idMaison']);
  $titre = "Choisissez une salle";
  if(isset($_SESSION["nomMaison"])){
      $titre = "▼ Salles de : ".$_SESSION["nomMaison"];
  }

}else{
  $resultat="";
  if(!isset($_SESSION["nomMaison"])){
    $titre="pas encore de maison";
  }
}
?>


  <div class="dropdown" >

         <button class="boutton "><?php echo($titre); ?></button>

            <div class="dropdown-content">

              <?php

              if(!empty($resultat)){
                while ($liste=$resultat->fetch()){
                    $nom =  str_replace(" ","_",$liste['sal']);
                    $params = "salle=".$liste['ID']."&salleNom=".$nom;

                  ?>
                  <button onclick= envoiePhP("<?php echo($params)?>",'Controleur/display-capteur.php') class="boutton"><?php echo($liste['sal']);?></button>
              <?php } $resultat->closeCursor();}

              ?>

            </div>
    </div>
</div>

<!-- EFFECTEURS -->
<div class="conteneurBloc n2 right">
<h2> Etat des effecteurs </h2>


<?php
include_once("Modele/db-maison-manager.php");
include_once("Modele/db-salle-manager.php");
if(isset($_SESSION['idMaison'])){
$resultat= getSallesList($db, $_SESSION['idMaison']);
}

 ?>

<div class="dropdown" >
    <button class="boutton "><?php echo($titre); ?></button>
        <div class="dropdown-content">
          <?php
          if(!empty($resultat)){
            while ($liste=$resultat->fetch()){
                $nom =  str_replace(" ","_",$liste['sal']);
                $params = "salle=".$liste['ID']."&salleNom=".$nom;
              ?>
              <button onclick= envoiePhP("<?php echo($params)?>",'Controleur/display-effecteur.php') class="boutton"><?php echo($liste['sal']);?></button>
          <?php } $resultat->closeCursor();}?>
        </div>
</div>
</div>

  <div class="center">
      <div class="resultat" id="resultat" ></div>
  </div>



<div class="conteneur center">
    <h4 id="nomSalle"></h4>
    <div id="resultat" ></div>
</div>
