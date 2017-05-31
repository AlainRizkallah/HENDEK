<script type="text/javascript" src="js/afficherdiv.js"></script>

<?php
$resultat = getMessagesList($db , $_SESSION['userID']);?>
  <form method="post" action="Controleur/message-manager.php">
<?php  while ($donnees = $resultat->fetch()){?>
  <u><b>  <?php echo $donnees['objet']; ?></b></u> de <b><?php echo $donnees['nom'];?></b>




    <button class="bouttonMSG" type=button onclick="toggle_div(this, '<?php echo "".$donnees['ID']?>');">afficher le message</button>
    <span class=textedroite>
      <button class="boutonFantome" type="submit" name=delMsgInt
      onclick="if(!confirm('Êtes vous sur de vouloir supprimer ce message ?\nCette action sera définitive.')) return false;" 
      value='<?php echo "".$donnees['ID']?>'/>❌ supprimer le message</button></span>
  </form>

<br><br>
<div id='<?php echo "".$donnees['ID']?>' style="display:none;">
  <i><?php echo ($donnees['message'])?></i><br><br>
</div>
  <br><?php

  //

  }
  $resultat->closeCursor();
     ?>
