<div class="login">
  <form method="POST">
        <div class="container">
<?php
if(isset($_SESSION["userID"])){
echo('

        <div class="conteneur">
          <label>Bienvenue: <b>'.$_SESSION["name"].'</b></label>
        </div>


        <button class="boutton" type="submit" name="btnDeco">Déconnexion</button>
');
include_once 'Vue/menu/selecteur-maison.php';

}else{
  echo('


          <label><b>Identifiant</b></label>
          <input type="text" placeholder="Identifiant" name="userName" required>
          <label><b>Mot de passe</b></label>
          <input type="password" placeholder="Mot de passe" name="psw" required>
          <button type="submit" name="btnLogin">Connexion</button>
          <span class="rmb"><input type="checkbox" checked="checked"> Remember me<br></span>
          <span class="su"> <a href="#">Mot de passe oublié?</a><br><a href="inscription.php">S\'inscrire</a></span>


  ');

}
?>
      </div>
    </form>
</div>
