  <h2>
    Liste de vos maisons
  </h2><br>

  <?php
  include_once("Modele/db-maison-manager.php");

  // SUPPRIMER UNE MAISON


  $reponse = getHabitationsList($db,  $_SESSION["idGroupe"]) ?>

    <form method="post" action="Controleur/maison-manager.php">
     <p class=textedroite>
         <select name="delHabitation" required>
           <option class=formLabel value="" disabled selected>Choisissez la maison à supprimer</option>

           <?php  while ($donnees = $reponse->fetch()) {?>
               <option value=<?php echo($donnees['ID'])?>><?php echo($donnees['nom'])?></option>
         <?php  }
         $reponse->closeCursor(); ?>
         </select>
        &nbsp; <input class="bouttonBis" name="btnSuppMaison" type="submit" onclick="if(!confirm('Êtes vous sur de vouloir supprimer cette maison ?\nCette action sera définitive.')) return false;" value="supprimer"/>
    </form>

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


<p class=center>
<input class=bouttonBis name="btnAddMaison" type="submit" value="ajouter la maison"/></p>
</form>
