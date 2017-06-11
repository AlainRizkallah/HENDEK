
<div class="conteneurBloc left">
  <h2>
    Ajouter un type de capteur
  </h2>

  <form method="post" action="Controleur/add-capteffect.php">
    <label class=formLabel>Type du nouveau capteur disponible</label><br><br>
    <input type=text placeholder="" name=capteur required>
    <button type="submit" name="addCapt">ajouter le capteur</button>
  </form>

  <h2>
    Liste des capteurs disponibles
  </h2>
  <?php
  include_once("Modele/db-capteffect-manager.php");
  $resultat=getCaptList($db);
  while ($donnees=$resultat->fetch()){
    echo $donnees['capteurs'];
  } ?>

</div>
<div class="conteneurBloc right">
  <h2>
    Ajouter un type d'effecteur
  </h2>

  <form method="post" action="Controleur/add-capteffect.php">
    <label class=formLabel>Type du nouvel effecteur disponible</label><br><br>
    <input type=text placeholder="" name=effecteur required>
    <button type="submit" name="addEffect">ajouter l'effecteur</button>
  </form>

  <h2>
    Liste des effecteurs disponibles
  </h2>
  <?php
  include_once("Modele/db-capteffect-manager.php");
  $resultat=getEffList($db);
  while ($donnees=$resultat->fetch()){
    echo $donnees['effecteurs'];
  } ?>
</div>
