<div class=textecentre>
  <p class="boxtitle">

    &nbsp; Liste de vos maisons &nbsp;
  </p><br>

  <?php
  include("Modele/db-maison-manager.php");
  $reponse = $db->query('SELECT * FROM habitation');
  $donnees = $reponse->fetch();
  while ($donnees = $reponse->fetch()) {
    echo $donnees['nom'];?> de superficie <?php echo $donnees['superficie'];?>m² à l'adresse <?php echo $donnees['adresse'];?>

    <br> <?php }
  $reponse->closeCursor();
  ?>

  <?php
  $reponse = $db->query('SELECT * FROM habitation');
  $donnees = $reponse->fetch(); ?>

   <form method="post" action="Controleur/delMaison.php">
    <p>
        <label>Choisissez la maison à supprimer</label><br />

        <select name="habitation">
          <?php  while ($donnees = $reponse->fetch()) {?>
            <option value=<?php echo($donnees['ID'])?>><?php echo($donnees['nom'])?></option>
        <?php  }
        $reponse->closeCursor(); ?>
        <input type="submit" value="supprimer" name=delHabitation />
   </form>

        </select>
    </p>

  <br><br><br>


  <div class="inputpiece">
<p class="boxtitle">
  &nbsp Ajouter une pièce à ma maison &nbsp
</p>
<form method="post" action="Controleur/addMaison.php">
   <p class="textegauche">
     <label for="adresse">Entrez l'adresse de votre maison</label><br />
     <input type="text" name="adresse" required />
       </select>
   </p>

   <p class="textedroite">
       <label for="nom">Nommez votre maison</label><br />
       <input type="text" name="nom" required />
   </p>
   <p>
     <label for="superficie">Entrez la superficie de votre maison</label><br />
     <input type="text" name="superficie" required />
   </p>
 </div>&nbsp<br>
<input type="submit" value="ajouter la pièce" name=addSalle />
</form>
