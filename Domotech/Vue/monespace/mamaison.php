  <h2>
    Liste de vos maisons
  </h2><br>

  <?php
  include_once("Modele/db-maison-manager.php");

  // SUPPRIMER UNE MAISON


  $reponse = getHabitationsList($db,  $_SESSION["idGroupe"]) ?>


   <form method="post" action="Controleur/maison-manager.php">
    <p class=textedroite>
        <label class=formLabel>Choisissez la maison à supprimer</label><br /><br />

        <select name="delHabitation">
          <?php  while ($donnees = $reponse->fetch()) {?>
            <option value=<?php echo($donnees['ID'])?>><?php echo($donnees['nom'])?></option>
        <?php  }
        $reponse->closeCursor(); ?>
        <input name="btnSuppMaison" type="submit" value="supprimer"/>

   </form>

        </select>
    </p>
<?php

// LISTE DES MAISONS

 include ('Vue/listemaisons.php') ?>

  <br><br><br>

<!-- AJOUTER UNE MAISON -->

<h2>
  Ajouter une maison
</h2></br>

<form method="post" action="Controleur/maison-manager.php">

   <p class="textegauche">
       <label class=formLabel for="nom">Nommez votre maison</label><br /><br />
       <input type="text" name="nom" required />
   </p>
   <p class="textedroite">
     <label class=formLabel for="superficie">Entrez la superficie de votre maison (en m²)</label><br /><br />
     <input type="text" name="superficie" required />
   </p>
    <br><br><br><br><br>
   <p>
     <label class=formLabel for="adresse">Entrez l'adresse de votre maison</label><br /><br />
     <input type="text" name="adresse" required />

   </p>



<input name="btnAddMaison" type="submit" value="ajouter la maison"/>
</form>
