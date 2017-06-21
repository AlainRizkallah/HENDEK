<div class="login">
  <form method="POST">
        <div class="container">
<?php
if(isset($_SESSION["userID"])){
include_once("Controleur/test-statut.php");
echo('
        <div class="dropdown">
          <label>Bienvenue : <b>'.$_SESSION["name"].'</b></label><br>
          <label><i>'.$ligne['status'].'</i></label><br>
          <a class=bouttonBis href="monespace.php?cible=monespace/monprofil.php">votre profil</a> </div>

');

?><?php

include_once 'Vue/menu/selecteur-maison.php';
include_once ("Modele/db-message-manager.php");

$nombre = unreadMsg($db , $_SESSION['userID']); ?>

<div class="dropdown" ><a class=bouttonBis href=monespace.php?cible=monespace/messagerie.php >✉ Messagerie privée

  <?php if ($nombre->rowcount()>0){?>
    (<?php echo($nombre->rowcount()); ?>)
  <?php } ?>

</a></div>
<button class="boutton" type="submit" name="btnDeco">Déconnexion</button>
<?php
}else{
  echo('


          <label><b>Identifiant</b></label>
          <input type="text" placeholder="Identifiant" name="userName" required>
          <label><b>Mot de passe</b></label>
          <input type="password" placeholder="Mot de passe" name="psw" required>
          <button type="submit" name="btnLogin">Connexion</button>
          <span class="rmb"><input type="checkbox" checked="checked"> Remember me<br></span>
          <span class="su"> <a href="resetmdp.php">Mot de passe oublié?</a><br><a href="inscription.php">S\'inscrire</a></span>


  ');

}
?>
      </div>
    </form>
</div>
