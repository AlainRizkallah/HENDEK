
<!-- TODO ajouter option retirer capteur -->



<h2>
   Liste des capteurs
</h2><br>


<?php
include("Modele/db-capteur-manager.php");
include("Modele/db-maison-manager.php");

// SUPPR CAPTEUR

$reponse = $db->query('SELECT habitation.nom hab , salle.nom sal , capteur.type capt , capteur.ID ID FROM habitation
JOIN salle ON habitation.ID=salle.idHabitation
JOIN capteur ON salle.ID=capteur.idSalle'); ?>

 <form method="post" action="Controleur/capteur-manager.php">
  <p class=textedroite>
      <label class=formLabel>Choisissez le capteur à supprimer</label><br /><br />

      <select name="maison">
        <?php  while ($donnees = $reponse->fetch()) {?>
          <option value=<?php echo($donnees['ID'])?>><?php echo($donnees['capt'])?> - <?php echo($donnees['sal'])?> - <?php echo($donnees['hab'])?></option>
      <?php  }
      $reponse->closeCursor(); ?>
      <input name="btnSuppCapteur" type="submit" value="supprimer"/>
 </form>

      </select>
  </p>


<!-- LISTE CAPTEURS -->

<?php include ('Vue/listecapteurs.php') ?>

<br><br><br>

  <h2>
  Ajouter un capteur
</h2>
  <form method="post" action="Controleur/capteur-manager.php">
    <p>
        <label class=formLabel for="maison">Choisissez votre maison</label><br /><br />
        <select name="maison">

          <?php $reponse = getHabitationsList($db,  $_SESSION["idGroupe"]);

          while ($donnees = $reponse->fetch()) {?>                                       <!-- affiche les maisons presente dans la BDD -->
            <option value=<?php echo($donnees['ID'])?>><?php echo($donnees['nom'])?></option>
         <?php } $reponse->closeCursor();?>

        </select>
    </p>
     <p class="textegauche">
         <label class=formLabel for="piece">Choisissez une pièce</label><br /><br />
         <select name="piece">
           <?php $reponse = $db->query('SELECT salle.ID ID , salle.nom nom FROM salle , habitation WHERE salle.idHabitation=habitation.ID');

           while ($donnees = $reponse->fetch()) {?>
             <option value=<?php echo($donnees['ID'])?>><?php echo($donnees['nom'])?></option>
          <?php } $reponse->closeCursor();?>
         </select>
     </p>
     <p class="textedroite">
         <label class=formLabel for="type">Choisissez un type de capteur</label><br /><br />
         <select name="type">
             <option value="Vidéosurveillance">Vidéosurveillance</option>
             <option value="Luminosité">Luminosité</option>
             <option value="Présence">Présence</option>
             <option value="Humidité">Humidité</option>
             <option value="Température">Température</option>
         </select>
     </p><br><br><br><br><br>
     <input name="btnAddCapteur" type="submit" value="ajouter un capteur"/>
  </form>

</div>
