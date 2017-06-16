<?php include("Vue/header.php"); ?>

<section>
<?php
  if (isset($_GET['cible'])){
    if ($_GET['cible']=="mailnotsent"){ ?>
      <div class="center">
        <p class="alerte">
          L'adresse e-mail spécifiée n'est pas dans notre base de donnée
        </p>
        <label class=formLabel for=email>Entrez votre adresse Email</label>
        <form method="post" action=Controleur/resetmdp.php >
          <input type=email placeholder="someone@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" required>
        <button type="submit" name="btnReset">Envoyer l'email de réinitialisation</button>
      </div>
      <?php }
  if ($_GET['cible']=="mailsent"){ ?>
    <div class="center">
      <p class="textecentre">
        Vous avez reçu par mail un lien permettant de modifier votre mot de passe
      </p>
    </div>
  <?php }
  if ($_GET['cible']=="mdpreset"){ ?>
    <div class="center">
      <p class="textecentre">
        Votre mot de passe a bien été modifié
      </p>
    </div>
  <?php }
  }
  else { ?>
    <div class="center">
      <label class=formLabel for=email>Entrez votre adresse Email</label>
      <form method="post" action=Controleur/resetmdp.php >
        <input type=email placeholder="someone@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" required>
      <button type="submit" name="btnReset">Envoyer l'email de réinitialisation</button>
    </div>
<?php  }

?>



</section>

<?php include("Vue/footer.php"); ?>

  </body>
</html>
