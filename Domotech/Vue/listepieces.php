<?php
//$resultat=$db->query('SELECT habitation.nom hab , salle.nom sal FROM habitation WHERE idGroupe=$_SESSION[idGroupe]
//JOIN salle ON idHabitation=habitation.ID ');
$resultat = getSalleList($db,  $_SESSION["idGroupe"]);?>
<form method="post" action="Controleur/salle-manager.php">
  <?php while ($liste=$resultat->fetch()){?>

    <button class="boutonFantome" type="submit" name="salle"
    onclick="if(!confirm('Êtes vous sur de vouloir supprimer cette pièce ?\nCette action sera définitive.')) return false;"
    value='<?php echo "".$liste['ID']?>'/> <img src=Vue/Image/domotech_suppr.png width=20px> </button>

  <b>  <?php echo ($liste['sal']);?> </b>dans <b><?php echo ($liste['hab']);?> </b><br>
<?php  } $resultat->closeCursor();?> </form>
