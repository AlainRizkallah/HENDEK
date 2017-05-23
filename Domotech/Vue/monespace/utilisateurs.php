<h2>Liste des utilisateurs</h2><br>

<!-- TODO LISTE + SUPPRIMER UTILISATEUR -->

<h2>Ajouter un utilisateur</h2><br>


<form class=register method="post" action="">
  <label class=formLabel>Identifiant</label>
  <input type="text" placeholder="Identifiant" name="username" required> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <label class=formLabel>Mot de Passe</label>
  <input type="password" placeholder="Mot de Passe" name="mdp" required> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <label class=formLabel for="type">Statut</label>
<select name="statut">
      <option value="">Utilisateur secondaire</option>
      <option value="">Enfant</option>
      <option value="">Perso 1</option>
      <option value="">Perso 2</option>
  </select>
</form>
