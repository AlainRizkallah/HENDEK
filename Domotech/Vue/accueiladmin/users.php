<div class=textecentre>
<p class="boxtitle">
   Liste des utilisateurs
</p><br>

<?php
  include_once("Modele/db-utilisateur-manager.php");

  $reponse = $db->query('SELECT * FROM utilisateurs ORDER BY idGroupe');
  while ($donnees = $reponse->fetch()) {?>
  IDENTIFIANT : <?php echo $donnees['identifiant'];?> <br>
  NOM : <?php echo $donnees['nom'];?><br>
  PRÉNOM : <?php echo $donnees['prenom'];?><br>
  E-MAIL : <?php echo $donnees['email'];?><br>
  TELEPHONE : <?php echo $donnees['tel'];?><br>
  STATUT : <?php echo $donnees['status'];?><br>
  idGroupe : <?php echo $donnees ['idGroupe']?><br>
</br></br></br>
    <?php }
  $reponse->closeCursor();
  ?>
</div>
