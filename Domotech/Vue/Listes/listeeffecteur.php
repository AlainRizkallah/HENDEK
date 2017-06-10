<?php $resultat=getEffecteurGroupList($db,  $_SESSION["idGroupe"]); ?>

<form method="post" action="Controleur/effecteur-manager.php">
  <?php while ($liste=$resultat->fetch()){

    if ($ligne['status']=='utilisateur principal') {?>

      <button class="boutonFantome" type="submit" name="maison"
      onclick="if(!confirm('Êtes vous sur de vouloir supprimer ce capteur ?\nCette action sera définitive.')) return false;"
      value='<?php echo "".$liste['ID']?>'/> <img src=Vue/Image/domotech_suppr.png width=20px> </button> <?php } ?>

      <b><?php echo ($liste['act']);?></b> dans <b><?php echo ($liste['sal']);?></b> dans <b><?php echo ($liste['hab']);?> </b>

      <br>

<?php  } $resultat->closeCursor();?>
</form>
