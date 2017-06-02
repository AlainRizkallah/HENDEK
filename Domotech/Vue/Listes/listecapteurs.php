<?php //jointure de 3 tables
/*
$resultat=$db->query('SELECT habitation.nom hab , salle.nom sal , capteur.type capt FROM habitation
JOIN salle ON habitation.ID=salle.idHabitation
JOIN capteur ON salle.ID=capteur.idSalle');
*/

$resultat=getCapteurList($db,  $_SESSION["idGroupe"]);?>
<form method="post" action="Controleur/capteur-manager.php">
<?php  while ($liste=$resultat->fetch()){?>

    <button class="boutonFantome" type="submit" name="maison"
    onclick="if(!confirm('Êtes vous sur de vouloir supprimer ce capteur ?\nCette action sera définitive.')) return false;"
    value='<?php echo "".$liste['ID']?>'/> <img src=Vue/Image/domotech_suppr.png width=20px> </button>

    <b><?php echo ($liste['capt']);?></b> dans <b><?php echo ($liste['sal']);?></b> dans <b><?php echo ($liste['hab']);?> </b><br>
<?php  } $resultat->closeCursor();?>
</form>
