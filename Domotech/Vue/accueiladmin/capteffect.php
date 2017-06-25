
<div class="conteneurBloc n2 left">
  <h2>
    Ajouter un type de capteur
  </h2>

  <form method="post" action="Controleur/capteffect-manager.php">
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
  $resultat=getCaptList($db); ?>
  <form method=post action="Controleur/capteffect-manager.php">
  <?php
  while ($donnees=$resultat->fetch()){
    ?>
    <p>
      <button class="boutonFantome" type="submit" name="delCapt"
      onclick="if(!confirm('Êtes vous sur de vouloir supprimer ce type de capteur ?\nCette action sera définitive.')) return false;"
      value='<?php echo "".$donnees['ID']?>'/> <img src=Vue/Image/domotech_suppr.png width=20px> </button>
      <b><?php echo($donnees['type']) ?></b>
      <?php
      if ($donnees['unite']!=""){
        echo ("(".$donnees['unite'].")");
      }?><br>
      prix : <?php echo($donnees['prix']) ?> €


    </p>
  <?php
} ?></form>

</div>
<div class="conteneurBloc n2 right">
  <h2>
    Ajouter un type d'effecteur
  </h2>

  <form method="post" action="Controleur/capteffect-manager.php">
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
  $resultat=getEffList($db); ?>
  <form method=post action="Controleur/capteffect-manager.php"> <?php
  while ($donnees=$resultat->fetch()){
    ?>
    <p>
      <button class="boutonFantome" type="submit" name="delEffect"
      onclick="if(!confirm('Êtes vous sur de vouloir supprimer ce type de capteur ?\nCette action sera définitive.')) return false;"
      value='<?php echo "".$donnees['ID']?>'/> <img src=Vue/Image/domotech_suppr.png width=20px> </button>
    <b>  <?php echo($donnees['type']) ?></b><br>prix : <?php echo($donnees['prix']) ?> €
    </p>
    <?php
  } ?></form>
</div>
