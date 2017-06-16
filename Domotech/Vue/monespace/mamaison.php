
<?php
include_once("Modele/db-maison-manager.php"); ?>

<div class="conteneurBloc n2 left">
  <?php if (isset($_GET['addel'])) {
    if ($_GET['addel']=="add"){ ?>
      <span class="vert" style="position:absolute;"> La maison a été ajoutée </span>
    <?php }
    if ($_GET['addel']=="del"){ ?>
      <span class="rouge" style="position:absolute;"> La maison a été supprimée </span>
    <?php }
  }?>
  <h2>
    Ajouter une maison
  </h2>

  <form method="post" action="Controleur/maison-manager.php">

    <p>
      <p class=formLabel> <label for="nom">Nommez votre maison</label> </p>
      <input type="text" name="nom" required />
    </p>
    <p>
      <p class=formLabel> <label for="superficie">Entrez la superficie de votre maison (en m²)</label> </p>
      <input type="text" name="superficie" required />
    </p>
    <p>
      <p class=formLabel> <label for="adresse">Entrez l'adresse de votre maison</label> </p>
      <input type="text" name="adresse" required />
    </p>
    <p class=center>
      <input class=bouttonBis name="btnAddMaison" type="submit" value="ajouter la maison"/>
    </p>
  </form>
</div>

<div class="conteneurBloc n2 right">
  <h2>
    Liste de vos maisons
  </h2>
  <br>
<?php include ('Vue/Listes/listemaisons.php') ?>
</div>
