
<div class="conteneurBloc n2 left">
  <h2>
    Ajouter un type de capteur
  </h2>

  <form method="post" action="Controleur/add-capteffect.php">
    <label class=formLabel>Type du nouveau capteur disponible</label><br><br>
    <input type=text placeholder="" name="type" maxlength="30" required>
<br><br>
    <label class=formLabel>Prix du  capteur</label>
<br><br>
    <input type="number" placeholder=""  step="any" name="prix" maxlength="9" required>
<br><br>
<label class=formLabel>Unité de mesure du capteur</label>
<br><br>
<input type="text" placeholder=""    maxlength="6" name="unite">
<br><br>
    <button type="submit" name="addCapt">ajouter le capteur</button>
  </form>

  <h2>
    Liste des capteurs disponibles
  </h2>
  <?php
  include_once("Modele/db-capteffect-manager.php");
  $resultat=getCaptList($db);
  while ($donnees=$resultat->fetch()){
    ?>
    <p>
      <?php echo($donnees['type']) ?>
      <?php
      if ($donnees['unite']!=""){
        echo ("(".$donnees['unite'].")");
      }?>
      prix: <?php echo($donnees['prix']) ?> €


    </p>
  <?php
  } ?>

</div>
<div class="conteneurBloc n2 right">
  <h2>
    Ajouter un type d'effecteur
  </h2>

  <form method="post" action="Controleur/add-capteffect.php">
    <label class=formLabel>Type du nouvel effecteur disponible</label><br><br>
    <input type=text placeholder="" name="type" maxlength="30" required>
    <br><br>
    <label class=formLabel>Prix du nouvel effecteur</label>
    <br><br>
    <input type="number" placeholder=""  step="any" name="prix"  maxlength="9" required>
    <br><br>
    <button type="submit" name="addEffect">ajouter l'effecteur</button>
  </form>

  <h2>
    Liste des effecteurs disponibles
  </h2>
  <?php
  include_once("Modele/db-capteffect-manager.php");
  $resultat=getEffList($db);
  while ($donnees=$resultat->fetch()){
    ?>
    <p>
      <?php echo($donnees['type']) ?> prix: <?php echo($donnees['prix']) ?> €
    </p>
    <?php
  } ?>
</div>
