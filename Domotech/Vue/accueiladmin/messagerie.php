<script type="text/javascript" src="js/affichermsg.js"></script>
<?php

include_once("Modele/db-message-manager.php");
$resultat = getMessageExtList($db);?>
<div class="texte">
  <h2> Boite de reception </h2>
<?php  while ($donnees = $resultat->fetch()){?>
<form method="post" action="Controleur/message-manager.php">
  <button class="boutonFantome" type="submit" name=delMsgInt
  onclick="if(!confirm('Êtes vous sur de vouloir supprimer ce message ?\nCette action sera définitive.')) return false;"
  value='<?php echo "".$donnees['ID'];?>'/><img src=Vue/Image/domotech_suppr.png width=20px></button>

<?php if ($donnees['lu']==0){?>
  <span class=rouge> <b>NON LU</b> </span> <?php } ?>

<?php if ($donnees['lu']==1){?>
  <span class=vert> <b>LU</b> </span> <?php } ?>

  <u><b>  <?php echo $donnees['objet']; ?></b></u> de <b><?php echo $donnees['prenom'];?>  <?php echo $donnees['nom'];?></b>



    <button class="bouttonMSG" type=button onclick="toggle_div(this, '<?php echo "".$donnees['ID']?>');">afficher le message</button>
<br>
    <?php if ($donnees['lu']==0){
    ?>
      <button class="boutonFantome vert" type=submit name="nonlu" value='<?php echo "".$donnees['ID'];?>'>marquer comme lu</button>
    <?php } ?>

    <?php if ($donnees['lu']==1){
    ?>
      <button class="boutonFantome rouge" type=submit name="lu" value='<?php echo "".$donnees['ID'];?>'>marquer comme non lu</button>
    <?php } ?>

  </form>

<br>
<div id='<?php echo "".$donnees['ID']?>' style="display:none;">
  <?php $msg = nl2br($donnees['message'])?>
  <i><?php echo ($msg);?></i><br><br>

  <b>telephone :</b> <?php echo $donnees['tel'];?> </br>
  <b>email :</b> <?php echo $donnees['mail'];?> </br>
</div></div>
  <br><br><?php //TODO repondre direct par mail

  //

  }
  $resultat->closeCursor();
     ?>
