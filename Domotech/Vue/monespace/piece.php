<p class="boxtitle">
  Liste des pièces
</p><br>

<?php
include("Modele/db-salle-manager.php");

// SUPPR SALLE

$reponse = $db->query('SELECT * FROM salle');
$donnees = $reponse->fetch(); ?>

 <form method="post" action="Controleur/delSalle.php">
  <p class=textedroite>
      <label class=formLabel>Choisissez la pièce à supprimer</label><br /><br />

      <select name="salle">
        <?php  while ($donnees = $reponse->fetch()) {?>
          <option value=<?php echo($donnees['ID'])?>><?php echo($donnees['nom'])?>, Maison <?php echo($donnees['idHabitation'])?></option>
      <?php  }
      $reponse->closeCursor(); ?>
      <input type="submit" value="supprimer"/>
 </form>

      </select>
  </p>

<!-- LISTE SALLES -->

<?php
$reponse = $db->query('SELECT * FROM salle');
$donnees = $reponse->fetch();

while ($donnees = $reponse->fetch()) {
  echo $donnees['nom'];?> dans la maison

<?php  }
?>

  <br> <?php
$reponse->closeCursor();

?>
<br><br><br>


<!-- AJOUTER UNE PIÈCE -->

<?php $reponse = $db->query('SELECT * FROM habitation');
$donnees = $reponse->fetch(); ?>

  <p class="boxtitle">
    Ajouter une pièce à ma maison
  </p>
  <form method="post" action="Controleur/addSalle.php">
     <p class="textegauche">
         <label class=formLabel for="maison">Choisissez une maison</label><br /><br />
         <select name="maison">
           <?php while ($donnees = $reponse->fetch()) {?>                                       <!-- affiche les maisons presente dans la BDD -->
             <option value=<?php echo($donnees['ID'])?>><?php echo($donnees['nom'])?></option>
          <?php }?>
         </select>
     </p>
     <p class="textedroite">
         <label class=formLabel for="nom">Nommez votre pièce</label><br /><br />
         <input cltype="text" name="nom" required />
     </p>
    <br><br><br><br><br>
<input type="submit" value="ajouter la pièce"/>
  </form>

</div>
