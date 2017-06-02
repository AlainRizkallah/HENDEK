




<?php
if(isset($_POST['liste'])){
  switch  ($_POST['liste']){
    case "habitation":
      $reponse = getHabitationsList($db,  $_SESSION["idGroupe"]);
      break;
    case "capteur":
      $resultat=getCapteurList($db,  $_SESSION["idGroupe"]);
      break;
    case "salle":
      $resultat = getSalleList($db,  $_SESSION["idGroupe"]);
      break;
  }
}
?>
<form method="post" action="Controleur/maison-manager.php">
<?php  while ($donnees = $reponse->fetch()) {?>

    <button class="boutonFantome" type="submit" name="delHabitation"
    onclick="if(!confirm('Êtes vous sur de vouloir supprimer cette maison ?\nCette action sera définitive.')) return false;"
    value='<?php echo "".$donnees['ID']?>'/> <img src=Vue/Image/domotech_suppr.png width=20px> </button>

  <b>  <?php echo $donnees['nom'];?> </b> de superficie <b><?php echo $donnees['superficie'];?>m²</b> à l'adresse<b> <?php echo $donnees['adresse'];?></b>
    <br>
  <?php }
  $reponse->closeCursor();
  ?>
</form>

<form method="post" action="Controleur/capteur-manager.php">
<?php  while ($liste=$resultat->fetch()){?>

    <button class="boutonFantome" type="submit" name="maison"
    onclick="if(!confirm('Êtes vous sur de vouloir supprimer ce capteur ?\nCette action sera définitive.')) return false;"
    value='<?php echo "".$liste['ID']?>'/> <img src=Vue/Image/domotech_suppr.png width=20px> </button>

    <b><?php echo ($liste['capt']);?></b> dans <b><?php echo ($liste['sal']);?></b> dans <b><?php echo ($liste['hab']);?> </b><br>
<?php  } $resultat->closeCursor();?>
</form>

<form method="post" action="Controleur/salle-manager.php">
  <?php while ($liste=$resultat->fetch()){?>

    <button class="boutonFantome" type="submit" name="salle"
    onclick="if(!confirm('Êtes vous sur de vouloir supprimer cette pièce ?\nCette action sera définitive.')) return false;"
    value='<?php echo "".$liste['ID']?>'/> <img src=Vue/Image/domotech_suppr.png width=20px> </button>

  <b>  <?php echo ($liste['sal']);?> </b>dans <b><?php echo ($liste['hab']);?> </b><br>
<?php  } $resultat->closeCursor();?> </form>

<?php
$resultat = getUserList($db,  $_SESSION["idGroupe"]);?>
<form method="post" action="Controleur/userSec-manager.php">
<?php          // POUR NE PAS QUE L'UTILISATEUR PRINCIPAL S'AFFICHE
   while ($liste=$resultat->fetch()){?>

        <button class="boutonFantome" type="submit" name="delUserSec"
        onclick="if(!confirm('Êtes vous sur de vouloir supprimer cet utilisateur ?\nCette action sera définitive.')) return false;"
        value='<?php echo "".$liste['id']?>'/> <img src=Vue/Image/domotech_suppr.png width=20px> </button>

<b>  <?php  echo ($liste['identifiant']);?></b>, <u>statut :</u> <b><?php echo ($liste['status']);?> </b><br>
<?php  } $resultat->closeCursor();?>
</form>
