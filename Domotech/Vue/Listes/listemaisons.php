<?php $reponse = getHabitationsList($db,  $_SESSION["idGroupe"]); ?>

<form method="post" action="Controleur/maison-manager.php">
  <?php while ($donnees = $reponse->fetch()) {?>

    <button class="boutonFantome" type="submit" name="delHabitation"
    onclick="if(!confirm('Êtes vous sur de vouloir supprimer cette maison ?\nCette action sera définitive.')) return false;"
    value='<?php echo "".$donnees['ID']?>'/> <img src=Vue/Image/domotech_suppr.png width=20px> </button>

    <b> <?php echo $donnees['nom'];?> </b> de superficie <b><?php echo $donnees['superficie'];?>m²</b> à l'adresse<b> <?php echo $donnees['adresse'];?></b>

    <br>
    <?php }
    $reponse->closeCursor(); ?>
</form>
