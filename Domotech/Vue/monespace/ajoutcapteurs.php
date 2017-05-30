
<!-- TODO ajouter option retirer capteur -->



<h2>
   Liste des capteurs
</h2>


<?php
include_once("Modele/db-capteur-manager.php");
include_once("Modele/db-maison-manager.php");
include_once("Modele/db-salle-manager.php");
// SUPPR CAPTEUR

$reponse = getCapteurList($db,  $_SESSION["idGroupe"]); ?>


    <form method="post" action="Controleur/capteur-manager.php">
     <p class=textedroite>
         <select name="maison" required>
           <option class=formLabel value="" disabled selected>Choisissez le capteur à supprimer</option>

           <?php  while ($donnees = $reponse->fetch()) {?>
               <option value=<?php echo($donnees['ID'])?>><?php echo($donnees['capt'])?> - <?php echo($donnees['sal'])?> - <?php echo($donnees['hab'])?></option>
         <?php  }
         $reponse->closeCursor(); ?>
         </select>
        &nbsp; <input class="bouttonBis" name="btnSuppCapteur" type="submit" onclick="if(!confirm('Êtes vous sur de vouloir supprimer ce capteur ?\nCette action sera définitive.')) return false;" value="supprimer"/>
    </form>


<!-- LISTE CAPTEURS -->

<?php include ('Vue/listecapteurs.php') ?>

<br><br><br>

  <h2>
  Ajouter un capteur
</h2>
  <form method="post" action="Controleur/capteur-manager.php">
    <p class=textegauche>

        <select name="maison" required>
          <option class=formLabel value="" disabled selected>Choisissez votre maison</option>
          <?php $reponse = getHabitationsList($db,  $_SESSION["idGroupe"]);

          while ($donnees = $reponse->fetch()) {?>                                       <!-- affiche les maisons presente dans la BDD -->
            <option value=<?php echo($donnees['ID'])?>><?php echo($donnees['nom'])?></option>
         <?php } $reponse->closeCursor();?>

        </select>
    </p>
     <p class="textedroite">

         <select name="piece" required>
           <option class=formLabel value="" disabled selected>Choisissez une pièce</option>
           <?php $reponse = getSalleList($db,$_SESSION['idGroupe']);

           while ($donnees = $reponse->fetch()) {?>
             <option value=<?php echo($donnees['ID'])?>><?php echo($donnees['sal'])?></option>
          <?php } $reponse->closeCursor();?>
         </select>
     </p></br><br><br><br>
     <p class="textegauche">
         <select name="type" required>
            <option class=formLabel value="" disabled selected>Choisissez un type de capteur</option>
             <option value="Vidéosurveillance">Vidéosurveillance</option>
             <option value="Luminosité">Luminosité</option>
             <option value="Présence">Présence</option>
             <option value="Humidité">Humidité</option>
             <option value="Température">Température</option>
         </select></p>
         <p class=textedroite>
     <input class=bouttonBis name="btnAddCapteur" type="submit" value="ajouter le capteur"/></p>
  </form>

</div>
