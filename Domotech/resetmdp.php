<?php include("Vue/header.php");?>

    <section>
      <div class="center">
        <label class=formLabel for=email>Entrez votre adresse Email</label>
        <form method="post" action=Controleur/resetmdp.php >
          <input type=email placeholder="someone@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" required>
        <button type="submit" name="btnReset">Envoyer l'email de réinitialisation</button>

      </div>
    </section>

<?php include("Vue/footer.php"); ?>

  </body>
</html>
