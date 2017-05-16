  <div class="register">
    <?php  include("Controleur/addUser.php"); ?>
    <form method="POST">
        <div class="container">
          <label><b>Nom</b></label>
          <input type="text" placeholder="Nom" name="nom" required>
          <label><b>Prénom</b></label>
          <input type="text" placeholder="Prénom" name="prenom" required>
          <label><b>E-mail</b></label>
          <input type="text" placeholder="someone@example.com" name="email" required>
          <label><b>Téléphone</b></label>
          <input type="text" placeholder="votre numéro de téléphone" name="tel" required>
          <label><b>Identifiant</b></label>
          <input type="text" placeholder="Identifiant" name="regUserName" required>
          <label><b>Mot de Passe</b></label>
          <input type="password" placeholder="Mot de Passe" name="regMdp" required>
          <button type="submit" name="btnRegister">Créer le compte</button>
        </div>
      </form>
    </div>
