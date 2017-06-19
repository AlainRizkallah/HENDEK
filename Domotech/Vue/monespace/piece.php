<?php
include_once("Modele/db-salle-manager.php");
include_once("Modele/db-maison-manager.php");
 ?>

<?php $reponse = getHabitationsList($db, $_SESSION["idGroupe"])?>
<div class="conteneurBloc n2 left">
  <?php if (isset($_GET['addel'])) {
    if ($_GET['addel']=="add"){ ?>
      <span class="vert" style="position:absolute;"> La pièce a été ajoutée </span>
    <?php }
    if ($_GET['addel']=="del"){ ?>
      <span class="rouge" style="position:absolute;"> La pièce a été supprimée </span>
    <?php }
  }?>
  <h2>
    Ajouter une pièce
  </h2>
  <form method="post" action="Controleur/salle-manager.php">
     <p>
        <p class=formLabel> <label for="maison">Choisissez une maison</label> </p>
        <select name="maison" required>
          <?php if(isset($_SESSION["nomMaison"])){
            ?>
            <option class=formLabel value="<?php echo($_SESSION["idMaison"])?>"><?php echo($_SESSION["nomMaison"])?> </option>

            <?php
          } else{
            ?>
              <option class=formLabel value="" disabled selected> </option>

          <?php }?>


          <?php while ($donnees = $reponse->fetch()) {?>                                       <!-- affiche les maisons presente dans la BDD -->
              <?php if(isset($_SESSION["idMaison"]) && $donnees['ID'] != $_SESSION["idMaison"] ){?>
            <option value=<?php echo($donnees['ID'])?>><?php echo($donnees['nom'])?></option>

            <?php }?>
            <?php }?>
        </select>
    </p>
    <p>
      <p class=formLabel> <label for="nom">Nommez votre pièce</label> </p>
      <input type="text" name="nom" required />
    </p>
    <p class=center>
      <input class="bouttonBis" name="btnAddSalle" type="submit" value="ajouter la pièce"/>
    </p>
  </form>
<?php $reponse->closeCursor(); ?>
</div>

<div class="conteneurBloc n2 right">
  <h2>
    Liste des pièces
  </h2>
  <br>
<?php include ('Vue/Listes/listepieces.php') ?>
</div>
