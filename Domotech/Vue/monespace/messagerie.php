<?php
include_once("Modele/db-message-manager.php");
?>
<div class="conteneurBloc n3">
  <?php if (isset($_GET['addel'])) {
    if ($_GET['addel']=="add"){ ?>
      <span class="vert"> Le message a été envoyé</span>
    <?php }
    if ($_GET['addel']=="del"){ ?>
      <span class="rouge"> Le message a été supprimé </span>
    <?php }
  }?>
<h2> Envoyer un message </h2>


<form method="POST" action= 'Controleur/message-manager.php'>
    <div class="container">

      <input type="text" placeholder="Identifiant du destinataire" name="destinataire" id=destinataire value="" required>
      <input type="text" placeholder="Objet" name="objet" id="objet" value="" required>
      <textarea id="message" placeholder="Votre message" name="message" tabindex="4" cols="120" rows="8"></textarea>
      </br></br>
      <button class="boutton gros" type="submit" name="messageInt">Envoyer</button>
      </br><br>
    </div>
</form>

<h2> Boîte de reception </h2>

<?php include('Vue/boitereception.php') ?>
</div>
