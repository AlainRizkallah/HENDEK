<script type="text/javascript" src="js/affichermodif.js"></script>

<?php
include_once("Modele/db-utilisateur-manager.php");
 ?>
<br><br><br><br>

<?php $res = getUserInfos($db, $_SESSION['userID']);
$infos = $res->fetch();

if ($infos['status']=="utilisateur principal") {?>

  <p class=formLabel>Prénom</p>
  <?php echo $infos['prenom'];?>

  <p class=formLabel>Nom</p>
  <?php echo $infos['nom'];

} ?>

<p class=formLabel>Identifiant</p>
<?php echo $infos['identifiant'];

if ($infos['status']=="utilisateur principal") {?>

  <p class=formLabel>Adresse email</p>
  <?php echo $infos['email'];?>
  <span class="conteneurBloc n2 right">
    <button class="bouttonMSG" type=button onclick="toggle_div(this, 'modMail');">modifier ✎</button>
  </span>
  <div id='modMail' style="display:none;">
    <br>
    <form method="post" action="Controleur/modifUser.php">
      <label><b>Entrez votre nouvelle adresse</b></label>
      <input type="email" placeholder="someone@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="modMail" required>
      <button type="submit" name="btnModMail">modifier</button>
    </form>
  </div>


  <p class=formLabel>Téléphone</p>
  <?php echo $infos['tel'];?>
  <span class="conteneurBloc n2 right">
    <button class="bouttonMSG" type=button onclick="toggle_div(this, 'modTel');">modifier ✎</button>
  </span>
  <div id='modTel' style="display:none;">
    <br>
    <form method="post" action="Controleur/modifUser.php">
      <label><b>Entrez votre nouveau numéro de téléphone</b></label>
      <input type="tel" placeholder="numéro de téléphone"  pattern="[+._%0-9]{9,11}$" name="modTel" required>
      <button type="submit" name="btnModTel">modifier</button>
    </form>
  </div>

<?php } ?>

<p class=formLabel>Statut</p>
<?php echo $infos['status'];?>

<p class=formLabel>Mot de passe</p>
<?php echo ("<i> cette information est cryptée </i>");?>

<span class="conteneurBloc n2 right">
  <button class="bouttonMSG" type=button onclick="toggle_div(this, 'modMdp');">modifier ✎</button>
</span>
<div id='modMdp' style="display:none;">
  <br>
  <form method="post" action="Controleur/modifUser.php">
    <label><b>Entrez votre ancien mot de passe</b></label>
    <input type=password placeholder="ancien mot de passe" name=prevMdp required><br>
    <label><b>Entrez votre nouveau mot de passe</b></label>
    <input type=password placeholder="nouveau mot de passe" name=newMdp required><br>
    <label><b>Confirmez votre nouveau mot de passe</b></label>
    <input type=password placeholder="nouveau mot de passe" name=confNewMdp required><br>
    <button type="submit" name="btnModMdp">modifier</button>
  </form>
</div>
