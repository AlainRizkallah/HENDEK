<div class="register">
  <?php  include("Controleur/addUser.php"); ?>
  <form method="POST">
      <div class="container">
        <label><b>Nom</b></label>
        <input type="text" placeholder="Nom" name="Nom" required>
        <label><b>Prénom</b></label>
        <input type="text" placeholder="Prénom" name="Prénom" required>
        <label><b>E-mail</b></label>
        <input type="text" placeholder="someone@example.com" name="email" required>
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="regUserName" required>
        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="regMdp" required>
        <button type="submit" name="btnRegister">Create Account</button>
      </div>
    </form>
  </div>
