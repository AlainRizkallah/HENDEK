<script type="text/javascript" src="js/afficherdiv.js"></script>
<script>

function rep(dest , objet, message){
  var msg = " \n __________ \n \n Message précédent : \n " ;
  var obj = "Réponse à : " ;

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
  value='<?php echo "".$donnees['ID']?>'/><img src=Vue/Image/domotech_suppr.png width=20px></button>

  <u><b>  <?php echo $donnees['objet']; ?></b></u> de <b><?php echo $donnees['nom'];?></b>




    <button class="bouttonMSG" type=button onclick="toggle_div(this, '<?php echo "".$donnees['ID']?>');">afficher le message</button>


  </form>

<br>
<div id='<?php echo "".$donnees['ID']?>' style="display:none;">
  <?php $msg = nl2br($donnees['message'])?>
  <i><?php echo ($msg);?></i><br><br>

  <button class="bouttonBis" type=button onclick="rep('<?php echo $donnees['nom'];?>' , '<?php echo $donnees['objet'];?>' ,'<?php echo $donnees['message'];?>' )">répondre</button>
</div>
  <br><br><?php

  //

  }
  $resultat->closeCursor();
     ?>
