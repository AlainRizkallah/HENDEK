<script type="text/javascript" src="js/afficherdiv.js"></script>

<?php
$resultat = getMessagesList($db , $_SESSION['userID']);
  while ($donnees = $resultat->fetch()){?>
  <u><b>  <?php echo $donnees['objet']; ?></b></u> de <b><?php echo $donnees['nom'];?></b>

<button class="bouttonMSG" onclick="toggle_div(this, '<?php echo "".$donnees['ID']?>');">afficher le message</button>
<br><br>
<div id='<?php echo "".$donnees['ID']?>' style="display:none;">
  <i><?php echo ($donnees['message'])?></i><br><br>
</div>
  <br><?php

  //

  }
  $resultat->closeCursor();
     ?>
