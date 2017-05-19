<div class=textecentre>

<p class="boxtitle">
  &nbsp Liste des pièces &nbsp
</p><br>

<?php
include("Modele/db-salle-manager.php");
$reponse = $db->query('SELECT * FROM salle');
$donnees = $reponse->fetch();
$rep = $db->query('SELECT * FROM habitation');
$do = $rep->fetch();
while ($donnees = $reponse->fetch()) {
  echo $donnees['nom'];?> dans la maison <?php echo $do['nom'];?>


  <br> <?php }
$reponse->closeCursor();
?>

<?php
$reponse = $db->query('SELECT * FROM salle');
$donnees = $reponse->fetch(); ?>

 <form method="post" action="Controleur/delSalle.php">
  <p>
      <label>Choisissez la pièce à supprimer</label><br />

      <select name="salle">
        <?php  while ($donnees = $reponse->fetch()) {?>
          <option value=<?php echo($donnees['ID'])?>><?php echo($donnees['nom'])?>, Maison : <?php echo($do['nom'])?></option>
      <?php  }
      $reponse->closeCursor(); ?>
      <input type="submit" value="supprimer" name=delSalle />
 </form>

      </select>
  </p>

<br><br><br>

  <p class="boxtitle">
    &nbsp Ajouter une pièce à ma maison &nbsp
  </p>
  
  <form method="post" action="Controleur/addSalle.php">
     <p class="textegauche">
         <label for="maison">Choisissez une maison</label><br />
         <select name="maison">
           <?php  while ($do = $rep->fetch()) {?>
           <option value=<?php echo($do['ID'])?>><?php echo($do['nom'])?> </option>
         <?php  } ?>

         </select>
     </p>
     <div class="inputpiece">
     <p class="textedroite">
         <label for="nom">Nommez votre pièce</label><br />
         <input type="text" name="nom" required />
     </p>
   </div>&nbsp<br>
<input type="submit" value="ajouter la pièce" name=addSalle />
  </form>

</div>
