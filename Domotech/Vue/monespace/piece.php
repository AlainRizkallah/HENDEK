<div class=textedroite>
<h2>
  Liste des pièces
</h2><br>

<?php
include_once("Modele/db-salle-manager.php");
include_once("Modele/db-maison-manager.php");
// SUPPR SALLE

include ('Vue/listepieces.php') ?>


<br><br><br>
</div>

<!-- AJOUTER UNE PIÈCE -->

<?php $reponse = getHabitationsList($db, $_SESSION["idGroupe"])?>
<div class="conteneurBloc n2">
  <div>
  <h2>
    Ajouter une pièce à ma maison
  </h2>
  <form method="post" action="Controleur/salle-manager.php">
     <p>
        <p class=formLabel> <label for="maison">Choisissez une maison</label></p>
         <select name="maison" required>
           <option class=formLabel value="" disabled selected> </option>
           <?php while ($donnees = $reponse->fetch()) {?>                                       <!-- affiche les maisons presente dans la BDD -->
             <option value=<?php echo($donnees['ID'])?>><?php echo($donnees['nom'])?></option>
          <?php }?>
         </select>
     </p>
     <p>
        <p class=formLabel> <label for="nom">Nommez votre pièce</label></p>
         <input type="text" name="nom" required />
     </p>
  <p class=center>
<input class="bouttonBis" name="btnAddSalle" type="submit" value="ajouter la pièce"/></p>
  </form>
<?php $reponse->closeCursor(); ?>
</div>
