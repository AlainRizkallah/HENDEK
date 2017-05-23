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

      <select name="salle">
        <option class=formLabel>Choisissez la pièce à supprimer</option>

        <?php  while ($donnees = $reponse->fetch()) {?>
          <option value=<?php echo($donnees['ID'])?>><?php echo($donnees['sal'])?> - <?php echo($donnees['hab'])?></option>
      <?php  }
      $reponse->closeCursor(); ?>
      </select>
      <input class="boutton" name="btnSuppSalle" type="submit" value="supprimer"/>
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
         <select name="maison">
           <option class=formLabel for="maison">Choisissez une maison</option>
           <?php while ($donnees = $reponse->fetch()) {?>                                       <!-- affiche les maisons presente dans la BDD -->
             <option value=<?php echo($donnees['ID'])?>><?php echo($donnees['nom'])?></option>
          <?php }?>
         </select>
     </p>
     <p class="textedroite">
         <label class=formLabel for="nom">Nommez votre pièce</label><br /><br />
         <input type="text" name="nom" required />
     </p>
    <br><br><br><br><br>
<input class="boutton" name="btnAddSalle" type="submit" value="ajouter la pièce"/>
  </form>
<?php $reponse->closeCursor(); ?>
</div>
