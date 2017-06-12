<?php
include_once("Modele/db-capteur-manager.php");
include_once("Modele/db-effecteur-manager.php");
include_once("Modele/db-maison-manager.php");
include_once("Modele/db-salle-manager.php");
include_once("Modele/db-capteffect-manager.php");
 ?>

<div class="conteneurBloc n3 n2 left">
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
        <?php $reponse=getCaptList($db);
        while ($donnees=$reponse->fetch()){  ?>
          <option value=<?php echo($donnees['capteurs'])?>><?php echo($donnees['capteurs'])?></option>
          <?php } $reponse->closeCursor();?>
      </select>
    </p>
    <p class=center>
      <input class="bouttonBis" name="btnAddCapteur" type="submit" value="ajouter le capteur"/>
    </p>
  </form>

<br>

  <h2>
    Ajouter un effecteur
  </h2>

  <script  async defer src="js/communicationPhp.js"></script>

  <form method="post" action="Controleur/effecteur-manager.php">
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
        <?php $reponse=getEffList($db);
        while ($donnees=$reponse->fetch()){  ?>
          <option value=<?php echo($donnees['effecteurs'])?>><?php echo($donnees['effecteurs'])?></option>
          <?php } $reponse->closeCursor();?>
      </select>
    </p>
    <p class=center>
      <input class="bouttonBis" name="btnAddEffecteur" type="submit" value="ajouter l'effecteur"/>
    </p>
  </form>

</div>

<div class="conteneurBloc n2 right">
  <h2>
    Liste des capteurs
  </h2>
  <br>
    <?php include ('Vue/Listes/listecapteurs.php'); ?>

<br><br><br>

  <h2>
    Liste des effecteurs
  </h2>
  <br>
    <?php include ('Vue/Listes/listeeffecteur.php'); ?>

</div>
