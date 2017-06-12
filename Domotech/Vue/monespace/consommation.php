<?php include_once("Modele/db-maison-manager.php");
include_once("Modele/db-salle-manager.php");
include_once("Modele/db-capteur-manager.php");
include_once("Modele/db-effecteur-manager.php");?>

<div class="conteneurBloc center">
<h3> BIENVENUE SUR VOTRE ESPACE
</h3></div>

<div class="conteneurBloc n3">
  <?php $reponse=getHabitationsList($db, $_SESSION['idGroupe']);
  while ($donnees=$reponse->fetch()){
    echo $donnees['nom']; ?> <br>
  <?php
    $rep=getSallesList($db,$donnees['ID']);
    while ($do=$rep->fetch()){ ?>
      <p style="padding-left:50px;">
      <?php echo $do['nom']; ?> <br></p>
      <?php
      $r=getCapteursList($db,$do['ID']);
      while ($d=$r->fetch()){ ?>
        <p style="padding-left:100px;">
        <?php echo $d['type']; ?> <br></p>
    <?php  }
    }
} ?>

</div>
