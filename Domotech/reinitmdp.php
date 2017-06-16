<?php include("Vue/header.php");?>
<section>
  <?php
  include_once("Modele/db-utilisateur-manager.php");
  $token = $_GET['token'];
  $user = getUser_byToken($db , $token);
  if($user->rowcount()>0){
    if (isset($_GET['cible'])){
      if ($_GET['cible']=="mdpincorrect"){ ?>
        <div class=center>
          <p class=alerte> La confirmation du mot de passe a échoué </p>
        </div>
    <?php
      }
    }
    $liste=$user->fetch();
    ?>
    <div class=center>
      <p class=formLabel>Réinitialisez votre mot de passe :</p>
        <form method="post" action="Controleur/resetmdp.php?token=<?php echo $_GET['token']; ?>">
        <input type=password placeholder="Entrez le nouveau mot de passe" name=newMdp required><br>
        <input type=password placeholder="Confirmez le nouveau mot de passe" name=confNewMdp required><br>
        <button type="submit" value='<?php echo "".$liste['id']?>' name="btnRESETmdp">modifier</button>
      </form>
    </div>
  <?php }

  else { ?>
    <div class="center">
      <p class="alerte">
        Page introuvable
      </p>
    </div>
    <?php
  }  ?>
</section>

<?php include("Vue/footer.php"); ?>

  </body>
</html>
