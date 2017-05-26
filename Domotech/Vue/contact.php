<div class="contact">
  <?php  include("Controleur/addUser.php"); ?>
  <form method="POST">
      <div class="container">
        <label><b>Nom</b></label>
        <input type="text" placeholder="Nom" name="nom" required>
        <label><b>Prénom</b></label>
        <input type="text" placeholder="Prénom" name="prenom" required>
        <label><b>E-mail</b></label>
        <input type="email" placeholder="someone@example.com" name="email" required>
        <label><b>Téléphone</b></label>
        <input type="tel" placeholder="votre numéro de téléphone" name="tel" required>
        <label><b>Message</b></label>
        <input type="text" placeholder="Votre message : " name="message" required>


        <button type="submit" name="btnRegister">Créer le compte</button>
      </div>
    </form>
  </div>
