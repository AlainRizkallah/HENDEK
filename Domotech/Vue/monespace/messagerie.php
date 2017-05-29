
<h2> Envoyer un message </h2>

  <form method="POST" action= 'Controleur/message-manager.php'>
      <div class="container">

        <input type="text" placeholder="Identifiant du destinataire" name="destinataire" required>
        <input type="text" placeholder="Objet" name="objet" required>
        <textarea id="message" placeholder="Votre message" name="message" tabindex="4" cols="120" rows="8"></textarea></br></br>

        <button type="submit" name="messageInt">Envoyer</button>
      </div>
    </form>
