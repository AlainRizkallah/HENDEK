<!-- TODO ajouter ici liste des capteurs présents dans la BDD -->
<div class=textecentre>

<p class="boxtitle">
  &nbsp Liste des capteurs &nbsp
</p><br>

<?php
include("Modele/db-capteur-manager.php");
$reponse = $db->query('SELECT * FROM capteur');
$donnees = $reponse->fetch();
while ($donnees = $reponse->fetch()) {
  echo $donnees['type'];?> dans la salle <?php echo $donnees['idSalle'] ?>

  <br> <?php }
$reponse->closeCursor();
?>


  <p class="boxtitle">
    &nbsp Ajouter un capteur &nbsp
  </p>
  <form method="post" action="Controleur/addCapteur.php">
    <p>
        <label for="maison">Choisissez votre maison</label><br />
        <select name="maison">
            <option value="0">Maison principale</option>
            <option value="1">Maison secondaire n.1</option>
        </select>
    </p>
     <p class="textegauche">
         <label for="piece">Choisissez une pièce</label><br />
         <select name="piece">
             <option value="0">Salle 0</option>
             <option value="1">Salle 1</option>
             <option value="2">Salle 2</option>
             <option value="3">Salle 3</option>
             <option value="4">Salle 4</option>
         </select>
     </p>
     <p class="textedroite">
         <label for="type">Choisissez un type de capteur</label><br />
         <select name="type">
             <option value="Vidéosurveillance">Vidéosurveillance</option>
             <option value="Luminosité">Luminosité</option>
             <option value="Présence">Présence</option>
             <option value="Humidité">Humidité</option>
             <option value="Température">Température</option>
         </select>
     </p>
     <input type="submit" value="ajouter un capteur" name=addCapteur />
  </form>

</div>
