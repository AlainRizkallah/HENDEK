<h2>
   Liste des utilisateurs
</h2><br>
<?php
// SUPPR CAPTEUR
include_once("Modele/db-utilisateur-manager.php");
$reponse = getUserList($db,  $_SESSION["idGroupe"]); ?>

 <form method="post" action="Controleur/userSec-manager.php">
  <p class=textedroite>
      <label class=formLabel>Choisissez le compte secondaire à supprimer</label><br /><br />

      <select name="delUserSec">
        <?php  $donnees=$reponse->fetch(); // ligne pour ne pas afficher l'utilisateur principal dans le menu déroulant
        while ($donnees = $reponse->fetch()) {?>
          <option value=<?php echo($donnees['id'])?>><?php echo($donnees['identifiant'])?></option>
      <?php  }
      $reponse->closeCursor(); ?>
      <input name="btnDelUserSec" type="submit" value="supprimer"/>
 </form>

      </select>
  </p>


<!-- LISTE CAPTEURS -->

<?php include ('Vue/listeusers.php') ?>

<br><br><br>

<!-- TODO LISTE + SUPPRIMER UTILISATEUR -->

<h2>Ajouter un utilisateur</h2><br>

<div class=register>
  <form method="post" action="Controleur/userSec-manager.php">
    <label class=formLabel>Identifiant</label>
    <input type="text" placeholder="Identifiant" name="username" required> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label class=formLabel>Mot de Passe</label>
    <input type="password" placeholder="Mot de Passe" name="mdp" required> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label class=formLabel for="statut">Statut</label>
  <select name="statut">
        <option value="Utilisateur secondaire">Utilisateur secondaire</option>
        <option value="Enfant">Enfant</option>
        <option value="">...</option>
        <option value="">...</option></br><br><br>
   </select>
</div>

      <p class=textecentre>  <input name="btnAddUserSec" type="submit" value="ajouter l'utilisateur"/></p>

</form>
