<?php //Envoyer un message ?>
<h2> Envoyer un message </h2>

  <form method="POST" action= 'Controleur/traiterMessage.php'>
      <div class="container">
        <input type="text" placeholder="Nom du destinataire " id="idDest" name="idDest" required>
        <input type="text" placeholder="Objet " id="objet" name="objet" required>
        <textarea id="message" placeholder="Votre message " name="message" tabindex="4" cols="120" rows="8"></textarea></br></br>

        <button type="submit" name="messageInt">Envoyer</button>
      </div>
    </form>
