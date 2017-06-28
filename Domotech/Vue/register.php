  <div class="register">
    <?php  include("Controleur/addUser.php"); ?>
    <form method="POST">
        <div class="container">
          <label><b>Nom</b></label>
          <input type="text" placeholder="Nom" name="nom" required>
          <label><b>Prénom</b></label>
          <input type="text" placeholder="Prénom" name="prenom" required>
          <label><b>E-mail</b></label>
          <input type="email" placeholder="someone@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" required>
          <label><b>Téléphone</b></label>
          <input type="tel" placeholder="votre numéro de téléphone"  pattern="[+._%0-9]{9,11}$" name="tel" required>
          <label><b>Identifiant</b></label>
          <input type="text" placeholder="Identifiant" name="regUserName" required>
          <label><b>Mot de Passe (4 caractères minimum)</b></label>
          <input type="password" pattern=".{4,}" placeholder="Mot de Passe" name="regMdp" required>
          <button type="submit" name="btnRegister">Créer le compte</button>
        </div>
        <label><input type="checkbox" id="conditions" value="accept" required>j'accepte les condtions d'utilisations</label>
        <p>
          <a href="./cgu.php">Conditions d'utilisation</a>
        </p>
      </form>
    </div>
