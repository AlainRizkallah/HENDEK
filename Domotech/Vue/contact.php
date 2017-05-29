<div class="contact">

  <form method="POST" action= 'Controleur/traiterMessage.php'>
      <div class="container">
        <label><b>Nom</b></label>
        <input type="text" placeholder="Nom" id="nom" name="nom" required>
        <label><b>Prénom</b></label>
        <input type="text" placeholder="Prénom" id="prenom" name="prenom" required>
        <label><b>E-mail</b></label>
        <input type="email" placeholder="someone@example.com" id="mail" name="mail" required>
        <label><b>Téléphone</b></label>
        <input type="tel" placeholder="votre numéro de téléphone" id="tel" name="tel" >
        <label><b>Message</b></label>
        <input type="text" placeholder="Objet " id="objet" name="objet" required>
        <textarea id="message" placeholder="Votre message " name="message" tabindex="4" cols="79" rows="8"></textarea>

        <button type="submit" name="envoi">Envoyer</button>
      </div>
    </form>
  </div>
