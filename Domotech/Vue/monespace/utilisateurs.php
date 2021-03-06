<!-- TODO LISTE + SUPPRIMER UTILISATEUR -->

<?php include_once("Modele/db-utilisateur-manager.php"); ?>
<div class="conteneurBloc n2 left">
  <?php if (isset($_GET['addel'])) {
    if ($_GET['addel']=="add"){ ?>
      <span class="vert" style="position:absolute;"> L'utilisateur a été ajouté </span>
    <?php }
    if ($_GET['addel']=="del"){ ?>
      <span class="rouge" style="position:absolute;"> L'utilisateur a été supprimé </span>
    <?php }
    if ($_GET['addel']=="mdperreur" ){ ?>
      <span class="rouge" style="position:absolute;"> La confirmation du mot de passe a échoué</span>
    <?php }
    if ($_GET['addel']=="mdp"){ ?>
      <span class="vert" style="position:absolute;"> Le mot de passe a été mis à jour </span>
    <?php }
    if ($_GET['addel']=="statut"){ ?>
      <span class="vert" style="position:absolute;"> Le statut a été mis à jour </span>
    <?php }
  }?>
  <h2>
    Ajouter un utilisateur
  </h2>

  <form method="post" action="Controleur/userSec-manager.php">
    <p>
      <p class=formLabel><label for=username> Identifiant</label> </p>
      <input type="text" name="username" required>
    </p>
    <p>
      <p class=formLabel> <label for=mdp>Mot de Passe</label> </p>
      <input type="password" name="mdp" required>
    </p>
    <p>
      <p class=formLabel> <label for=statut>Statut</label> </p>
      <select name="statut" required>
        <option class=formLabel value="" disabled selected></option>
        <option value="Utilisateur secondaire">Utilisateur secondaire</option>
        <option value="Enfant">Enfant</option>
      </select>
    </p>
    <p class=center>
      <input class=bouttonBis name="btnAddUserSec" type="submit" value="ajouter l'utilisateur"/>
    </p>
  </form>
</div>

<div class="conteneurBloc n2 right">
  <h2>
    Liste des utilisateurs secondaires
  </h2>
  <br>
  <?php include ('Vue/Listes/listeusers.php'); ?>
</div>
