<?php
include_once("Modele/db-maison-manager.php");

$reponse = getHabitationsList($db,  $_SESSION["idGroupe"]);
//TODO personnaliser la fonction dans le onClick

if(!isset($_SESSION["nomMaison"])){
  $nomMaison = "Choix de la Maison ▼";
}else{
    $nomMaison = $_SESSION["nomMaison"];
}

 ?>
<div class="dropdown" >

      <button class="boutton"> <?php echo $nomMaison ?> ▼</button>


        <div class="dropdown-content">

          <?php
            while ($liste=$reponse->fetch()){
              if(!isset( $_SESSION["idMaison"])){
                $_SESSION["idMaison"] = $liste['ID'];
              }
              $nom =  str_replace(" ","_",$liste['nom']);
              $params = "maisonId=".$liste['ID']."&nomMaison=".$nom;
              if($nomMaison!=$liste['nom']){
              ?>
              <button onclick= envoiePhP("<?php echo($params);?>",'Controleur/maison-manager.php') class="boutton"><?php echo($liste['nom']);?></button>
              <?php }?>
          <?php } $reponse->closeCursor();?>

        </div>

</div>
