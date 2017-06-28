<script type="text/javascript" src="js/affichermsg.js"></script>
<script>

var msg = " \n __________ \n \n Message précédent : \n " ;
var obj = "Réponse à : " ;

function rep(dest , objet, message){

  window.scrollTo(0,0);
  document.getElementById("destinataire").value = dest ;
  document.getElementById("objet").value = obj + objet ;
  document.getElementById("message").value = msg + message ;

}

  </script>

<?php
$resultat = getMessagesList($db , $_SESSION['userID']);?>

<?php  while ($donnees = $resultat->fetch()){?>
<form method="post" action="Controleur/message-manager.php">
  <button class="boutonFantome" type="submit" name=delMsgInt
  onclick="if(!confirm('Êtes vous sur de vouloir supprimer ce message ?\nCette action sera définitive.')) return false;"
  value='<?php echo "".$donnees['ID'];?>'/><img src=Vue/Image/domotech_suppr.png width=20px></button>
  <span class=right><i><?php echo $donnees['datee'];?></i></span>

<?php if ($donnees['lu']==0){?>
  <span class=rouge> <b>NON LU</b> </span> <?php } ?>

<?php if ($donnees['lu']==1){?>
  <span class=vert> <b>LU</b> </span> <?php } ?>

  <u><b>  <?php echo $donnees['objet']; ?></b></u> de <b><?php echo $donnees['nom'];?></b>



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
  <i><?php echo ($msg);
    $dest = str_replace( '/"/g', '&quot;' , $donnees['message']) ;
    ?>
  </i><br><br>


  <button class="bouttonBis" type=button onclick="rep('<?php echo $donnees['nom'];?>' , '<?php echo $donnees['objet'];?>' ,'<?php echo $dest;?>' )">répondre</button>
</div>
  <br><br><?php

  //

  }
  $resultat->closeCursor();
     ?>
