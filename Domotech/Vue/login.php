<?php
if(isset($_SESSION["userID"])){
echo('
<div class="logged">
  <form method="POST">
      <div class="container">
        <label>Bienvenue: <b>'.$_SESSION["name"].'</label>

        <button type="submit" name="btnDeco">Disconnect</button>
      </div>
    </form>
  </div>

');

}else{
  echo('
    <div class="login">
    <form method="POST">
        <div class="container">
          <label><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="userName" required>
          <label><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
          <button type="submit" name="btnLogin">Login</button>
          <input type="checkbox" checked="checked"> Remember me<br>
          <span class="su"><a href="inscription.php">S\'inscrire</a></span><br>
          <span class="psw"><a href="#">Mot de passe oublié?</a></span>
        </div>
      </form>
    </div>
  ');

}
