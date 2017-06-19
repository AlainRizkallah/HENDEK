<script type="text/javascript" src="js/affichermodif_2.js"></script>
<script type="text/javascript" src="js/showuserseclist.js"></script>
<div class=texte>
  <?php if (isset($_GET['addel'])) {
    if ($_GET['addel']=="del"){ ?>
      <span class="rouge"> L'utilisateur a été supprimé </span>
    <?php }
    if ($_GET['addel']=="prenom"){ ?>
      <span class="vert"> Le prénom de l'utilisateur a été mise à jour </span>
    <?php }
    if ($_GET['addel']=="nom"){ ?>
      <span class="vert"> Le nom de l'utilisateur a été mis à jour </span>
    <?php }
    if ($_GET['addel']=="mail"){ ?>
      <span class="vert"> L'adresse e-mail de l'utilisateur a été mise à jour </span>
    <?php }
    if ($_GET['addel']=="tel"){ ?>
      <span class="vert"> Le numéro de téléphone de l'utilisateur a été mise à jour </span>
    <?php }
    if ($_GET['addel']=="statut"){ ?>
      <span class="vert"> Le statut de l'utilisateur a été mis à jour </span>
    <?php }
    if ($_GET['addel']=="mdpOK"){ ?>
      <span class="rouge"> Le mot de passe de l'utilisateur a été changé </span>
    <?php }
    if ($_GET['addel']=="confMDP"){ ?>
      <span class="rouge"> La confirmation du mot de passe a échoué </span>
    <?php }
  }?>
<h2>
   Liste des utilisateurs
</h2>

<?php
include_once("Modele/db-utilisateur-manager.php");

$reponse = $db->query('SELECT * FROM utilisateurs WHERE status = "Utilisateur principal" ORDER BY identifiant');
while ($donnees = $reponse->fetch()) {?>
  <form method="POST" action="Controleur/userSec-manager.php">
    <button class="boutonFantome" type="submit" name="delUserSecBis"
    onclick="if(!confirm('Êtes vous sur de vouloir supprimer cet utilisateur ?\nCette action sera définitive.')) return false;"
    value='<?php echo "".$donnees['id']?>' /> <img src=Vue/Image/domotech_suppr.png width=20px> </button>

  <b><?php echo $donnees['identifiant'];?> </b><button class="boutonFantome boutton " type=button onclick="toggle_div(this, '<?php echo "".$donnees['id']?>');">modifier ses infos ✎</button>
  <span class="conteneurBloc"><br>
    <button class="boutonFantome boutton " type=button onclick="toggle_div2(this, '<?php echo "".$donnees['identifiant']?>');">afficher la liste des utilisateurs secondaires du compte</button>
  </span><br></form>
  <div id='<?php echo "".$donnees['id']?>' style="display:none;"><br>
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
</div>
