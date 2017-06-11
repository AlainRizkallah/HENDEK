<script type="text/javascript" src="js/affichermodif_2.js"></script>
<script type="text/javascript" src="js/showuserseclist.js"></script>
<h2>
   Liste des utilisateurs
</h2>

<?php
include_once("Modele/db-utilisateur-manager.php");

$reponse = $db->query('SELECT * FROM utilisateurs WHERE status = "Utilisateur principal"');
while ($donnees = $reponse->fetch()) {?>
  <form method="post" action="Controleur/userSec-manager.php">
    <button class="boutonFantome" type="submit" name="delUserSec"
    onclick="if(!confirm('Êtes vous sur de vouloir supprimer cet utilisateur ?\nCette action sera définitive.')) return false;"
    value='<?php echo "".$donnees['id']?>'/> <img src=Vue/Image/domotech_suppr.png width=20px> </button>

  <b><?php echo $donnees['identifiant'];?> </b><button class="boutonFantome boutton " type=button onclick="toggle_div(this, '<?php echo "".$donnees['id']?>');">modifier ses infos ✎</button>
  <span class="conteneurBloc"><br>
    <button class="boutonFantome boutton " type=button onclick="toggle_div2(this, '<?php echo "".$donnees['identifiant']?>');">afficher la liste des utilisateurs secondaires du compte</button>
  </span><br>
  <div id='<?php echo "".$donnees['id']?>' style="display:none;"></form><br>
  <?php $res = getUserInfos($db, $donnees['id']);
  include("Vue/profil-admin.php");?>

  </div>

  <div class="conteneurBloc n3" id='<?php echo "".$donnees['identifiant']?>' style="display:none;">
    <?php
    $resultat = getUserList($db,  $donnees['idGroupe']);?>
    <h2>
       Liste des utilisateurs secondaires
    </h2>
  <?php  include("Vue/Listes/listeusers-admin.php"); ?>
  </div>
</br>
    <?php }
  $reponse->closeCursor();
  ?>
