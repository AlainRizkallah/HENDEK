<?php
$resultat = getUserList($db,  $_SESSION["idGroupe"]);?>
<form method="post" action="Controleur/userSec-manager.php">
<?php  $liste=$resultat->fetch();         // POUR NE PAS QUE L'UTILISATEUR PRINCIPAL S'AFFICHE
   while ($liste=$resultat->fetch()){?>

        <button class="boutonFantome" type="submit" name="delUserSec"
        onclick="if(!confirm('Êtes vous sur de vouloir supprimer cet utilisateur ?\nCette action sera définitive.')) return false;"
        value='<?php echo "".$liste['id']?>'/> <img src=Vue/Image/domotech_suppr.png width=20px> </button>

<b>  <?php  echo ($liste['identifiant']);?></b>, <u>statut :</u> <b><?php echo ($liste['status']);?> </b><br>
<?php  } $resultat->closeCursor();?>
</form>
