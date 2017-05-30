<h2>
  Liste des pièces
</h2><br>

<?php
include_once("Modele/db-salle-manager.php");
include_once("Modele/db-maison-manager.php");
// SUPPR SALLE

$reponse = getSalleList($db,  $_SESSION["idGroupe"]); ?>

 <form method="post" action="Controleur/salle-manager.php">
  <p class=textedroite>

      <select name="salle" required>
        <option class=formLabel value="" disabled selected>Choisissez la pièce à supprimer</option>

        <?php  while ($donnees = $reponse->fetch()) {?>
          <option value=<?php echo($donnees['ID'])?>><?php echo($donnees['sal'])?> - <?php echo($donnees['hab'])?></option>
      <?php  }
      $reponse->closeCursor(); ?>
      </select>
      &nbsp;<input class="bouttonBis" name="btnSuppSalle" type="submit" onclick="if(!confirm('Êtes vous sur de vouloir supprimer cette pièce ?\nCette action sera définitive.')) return false;" value="supprimer"/>
 </form>


  </p>


<!-- LISTE SALLES -->

<?php include ('Vue/listepieces.php') ?>


<br><br><br>


<!-- AJOUTER UNE PIÈCE -->

<?php $reponse = getHabitationsList($db, $_SESSION["idGroupe"])?>

  <h2>
    Ajouter une pièce à ma maison
  </h2>
  <form method="post" action="Controleur/salle-manager.php">
     <p class="textegauche">
         <select name="maison" required>
           <option class=formLabel value="" disabled selected>Choisissez une maison</option>
           <?php while ($donnees = $reponse->fetch()) {?>                                       <!-- affiche les maisons presente dans la BDD -->
             <option value=<?php echo($donnees['ID'])?>><?php echo($donnees['nom'])?></option>
          <?php }?>
         </select>
     </p>
     <p class="textedroite">
         <label class=formLabel for="nom">Nommez votre pièce</label><br /><br />
         <input type="text" name="nom" required />
     </p>
    <br><br><br><br><br><br><br><p class=center>
<input class="bouttonBis" name="btnAddSalle" type="submit" value="ajouter la pièce"/></p>
  </form>
<?php $reponse->closeCursor(); ?>
</div>
