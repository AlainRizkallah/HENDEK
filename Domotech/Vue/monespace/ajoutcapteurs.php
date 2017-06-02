<?php
include_once("Modele/db-capteur-manager.php");
include_once("Modele/db-maison-manager.php");
include_once("Modele/db-salle-manager.php");
 ?>

<div class="conteneurBloc n2 left">
  <h2>
    Ajouter un capteur
  </h2>

  <script  async defer src="js/communicationPhp.js"></script>

  <form method="post" action="Controleur/capteur-manager.php">
    <p>
      <p class=formLabel> <label for=piece>Piece</label> </p>
      <select name="piece" required>
        <option class=formLabel value="" disabled selected></option>

        <?php $reponse=getSallesList($db, $_SESSION['idMaison']);

        while ($donnees = $reponse->fetch()) {?>
          <option value=<?php echo($donnees['ID'])?>><?php echo($donnees['sal'])?></option>
          <?php } $reponse->closeCursor();?>
      </select>
    </p>
    <p>
      <p class=formLabel> <label for=type>Type</label> </p>
      <select name="type" required>
        <option class=formLabel value="" disabled selected></option>
        <option value="Vidéosurveillance">Vidéosurveillance</option>
        <option value="Luminosité">Luminosité</option>
        <option value="Présence">Présence</option>
        <option value="Humidité">Humidité</option>
        <option value="Température">Température</option>
      </select>
    </p>
    <p class=center>
      <input class="bouttonBis" name="btnAddCapteur" type="submit" value="ajouter le capteur"/>
    </p>
  </form>
</div>
<div class="conteneurBloc n2 right">
  <h2>
    Liste des capteurs
  </h2>
  <br>
    <?php include ('Vue/Listes/listecapteurs.php') ?>
</div>
