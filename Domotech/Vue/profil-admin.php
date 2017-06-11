<script type="text/javascript" src="js/affichermodif.js"></script>

<?php
include_once("Modele/db-utilisateur-manager.php");
 ?>

<div class="conteneurBloc n3">

<?php $infos = $res->fetch();

 ?>

  <p class=formLabel>Prénom</p>
  <?php echo $infos['prenom'];?>
  <span class="conteneurBloc n2 right">
    <button class="bouttonMSG" type=button onclick="toggle_div(this, '<?php echo "modPrenom".$donnees['id']?>');">modifier ✎</button>
  </span>
  <div id='<?php echo "modPrenom".$donnees['id']?>' style="display:none;">
    <br>
    <form method="post" action="Controleur/modifUser-admin.php">
      <label><b>Entrez le nouveau prenom</b></label>
      <input type="text" placeholder="nouveau prenom" name="modPrenom" required><br>
      <button type="submit" value='<?php echo "".$donnees['id']?>' name="btnModPrenom">modifier</button>
    </form>
  </div>

  <p class=formLabel>Nom</p>
  <?php echo $infos['nom'];?>
  <span class="conteneurBloc n2 right">
    <button class="bouttonMSG" type=button onclick="toggle_div(this, '<?php echo "modNom".$donnees['id']?>');">modifier ✎</button>
  </span>
  <div id='<?php echo "modNom".$donnees['id']?>' style="display:none;">
    <br>
    <form method="post" action="Controleur/modifUser-admin.php">
      <label><b>Entrez le nouveau nom</b></label>
      <input type="text" placeholder="nouveau nom" name="modNom" required><br>
      <button type="submit" value='<?php echo "".$donnees['id']?>' name="btnModNom">modifier</button>
    </form>
  </div>


<p class=formLabel>Identifiant</p>
<?php echo $infos['identifiant'];?>

  <p class=formLabel>Adresse email</p>
  <?php echo $infos['email'];?>
  <span class="conteneurBloc n2 right">
    <button class="bouttonMSG" type=button onclick="toggle_div(this, '<?php echo "modMail".$donnees['id']?>');">modifier ✎</button>
  </span>
  <div id='<?php echo "modMail".$donnees['id']?>' style="display:none;">
    <br>
    <form method="post" action="Controleur/modifUser-admin.php">
      <label><b>Entrez la nouvelle adresse</b></label>
      <input type="email" placeholder="someone@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="modMail" required>
      <button type="submit" value='<?php echo "".$donnees['id']?>' name="btnModMail">modifier</button>
    </form>
  </div>


  <p class=formLabel>Téléphone</p>
  <?php echo $infos['tel'];?>
  <span class="conteneurBloc n2 right">
    <button class="bouttonMSG" type=button onclick="toggle_div(this, '<?php echo "modTel".$donnees['id']?>');">modifier ✎</button>
  </span>
  <div id='<?php echo "modTel".$donnees['id']?>' style="display:none;">
    <br>
    <form method="post" action="Controleur/modifUser-admin.php">
      <label><b>Entrez le nouveau numéro de téléphone</b></label>
      <input type="tel" placeholder="numéro de téléphone"  pattern="[+._%0-9]{9,11}$" name="modTel" required>
      <button type="submit" value='<?php echo "".$donnees['id']?>' name="btnModTel">modifier</button>
    </form>
  </div>

<?php  ?>

<p class=formLabel>Statut</p>
<?php echo $infos['status'];?>
<span class="conteneurBloc n2 right">
  <button class="bouttonMSG" type=button onclick="toggle_div(this, '<?php echo "modStatut".$donnees['id']?>');">modifier ✎</button>
</span>
<div id='<?php echo "modStatut".$donnees['id']?>' style="display:none;">
  <br>
  <form method="post" action="Controleur/modifUser-admin.php">
    <label><b>Selectionnez le nouveau statut</b></label>
    <select name="statut" required>
      <option class=formLabel value="" disabled selected></option>
      <option value="admin">admin</option>
      <option value="Utilisateur principal">Utilisateur principal</option>
      <option value="Utilisateur secondaire">Utilisateur secondaire</option>
      <option value="Enfant">Enfant</option>
    </select><br>
    <button type="submit" value='<?php echo "".$donnees['id']?>' name="btnModStatut">modifier</button>
  </form>
</div>

<p class=formLabel>Mot de passe</p>
<?php echo ("<i> cette information est cryptée </i>");?>

<span class="conteneurBloc n2 right">
  <button class="bouttonMSG" type=button onclick="toggle_div(this, '<?php echo "modMdp".$donnees['id']?>');">modifier ✎</button>
</span>
<div id='<?php echo "modMdp".$donnees['id']?>' style="display:none;">
  <br>
  <form method="post" action="Controleur/modifUser-admin.php">
    <input type=password placeholder="Entrez le nouveau mot de passe" name=newMdp required><br>
    <input type=password placeholder="Confirmez le nouveau mot de passe" name=confNewMdp required><br>
    <button type="submit" value='<?php echo "".$donnees['id']?>' name="btnModMdp">modifier</button>
  </form>
</div>

</div>
