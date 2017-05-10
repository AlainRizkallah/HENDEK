<div class="register">
  <?php  include("Controleur/addUser.php"); ?>
  <form method="POST">
      <div class="container">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="userName" required>
        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
        <button type="submit" name="btnRegister">Create Account</button>
      </div>
    </form>
  </div>
