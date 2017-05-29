

<!-- Le JS... -->
<script type="text/javascript">
function toggle_div(bouton, id) { // On déclare la fonction toggle_div qui prend en param le bouton et un id
  var div = document.getElementById(id); // On récupère le div ciblé grâce à l'id
  if(div.style.display=="none") { // Si le div est masqué...
    div.style.display = "block"; // ... on l'affiche...
    bouton.innerHTML = "masquer le message"; // ... et on change le contenu du bouton.
  } else { // S'il est visible...
    div.style.display = "none"; // ... on le masque...
    bouton.innerHTML = "afficher le message" // ... et on change le contenu du bouton.
  }
}
</script>

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


  }
  $resultat->closeCursor();
     ?>
