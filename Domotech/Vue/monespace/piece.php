<div class=textecentre>

<p class="boxtitle">
  &nbsp Liste des pièces &nbsp
</p><br>

<?php
include("Modele/db-salle-manager.php");
$reponse = $db->query('SELECT * FROM salle');
$donnees = $reponse->fetch();
while ($donnees = $reponse->fetch()) {
  echo $donnees['nom'];?> dans la maison
  <?php if ($donnees['idHabitation']==0) {
          ?>principale
<?php  }
        if ($donnees['idHabitation']==1) {
          ?>secondaire n.1
<?php  }
?>

  <br> <?php }
$reponse->closeCursor();
?>


  <p class="boxtitle">
    &nbsp Ajouter une pièce à ma maison &nbsp
  </p>
  <form method="post" action="Controleur/addSalle.php">
     <p class="textegauche">
         <label for="maison">Choisissez une maison</label><br />
         <select name="maison">
             <option value="0">Maison principale</option>
             <option value="1">Maison secondaire n.1</option>
         </select>
     </p>
     <div class="inputpiece">
     <p class="textedroite">
         <label for="nom">Nommez votre pièce</label><br />
         <input type="text" name="nom" />
     </p> 
     </div>
<input type="submit" value="ajouter la pièce" name=addSalle />
  </form>

</div>
