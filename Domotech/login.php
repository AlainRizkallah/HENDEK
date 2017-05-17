<?php include("Vue/header.php");?>

    <section>
      <h2 class=center>Connectez-vous</h2>

      <div class="conteneur-section center">
        <div class="center">
          <?php

           include ('Vue/login.php');

           ?>

           <p>
             Si vous n'avez pas de compte, vous pouvez en créer un
             </p>
             <div class="center">

               <a class="boutton" href="inscription.php">Créer un compte</a>
             </div>
        </div>

      </div>
    </section>

<?php include("Vue/footer.html"); ?>

  </body>
</html>
