<div class=textecentre>
<p class="boxtitle">
   Liste des utilisateurs
</p><br>

<?php
  include("Modele/db-utilisateur-manager.php");

  $reponse = $db->query('SELECT * FROM utilisateurs');
  while ($donnees = $reponse->fetch()) {?>
  IDENTIFIANT : <?php echo $donnees['identifiant'];?> <br>
  NOM : <?php echo $donnees['nom'];?><br>
  PRÉNOM : <?php echo $donnees['prenom'];?><br>
  E-MAIL : <?php echo $donnees['email'];?><br>
  TELEPHONE : <?php echo $donnees['tel'];?><br>
  STATUT : <?php echo $donnees['status'];?><br>
</br></br></br>
    <?php }
  $reponse->closeCursor();
  ?>
</div>
