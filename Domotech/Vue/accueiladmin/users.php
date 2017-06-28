<script type="text/javascript" src="js/affichermodif_2.js"></script>
<script type="text/javascript" src="js/showuserseclist.js"></script>
<script type="text/javascript" src="js/showlistsadmin.js"></script>
<div class=texte>
  <?php if (isset($_GET['addel'])) {
    if ($_GET['addel']=="del"){ ?>
      <span class="rouge"> L'utilisateur a été supprimé </span>
    <?php }
    if ($_GET['addel']=="prenom"){ ?>
      <span class="vert"> Le prénom de l'utilisateur a été mis à jour </span>
    <?php }
    if ($_GET['addel']=="nom"){ ?>
      <span class="vert"> Le nom de l'utilisateur a été mis à jour </span>
    <?php }
    if ($_GET['addel']=="mail"){ ?>
      <span class="vert"> L'adresse e-mail de l'utilisateur a été mise à jour </span>
    <?php }
    if ($_GET['addel']=="tel"){ ?>
      <span class="vert"> Le numéro de téléphone de l'utilisateur a été mis à jour </span>
    <?php }
    if ($_GET['addel']=="statut"){ ?>
      <span class="vert"> Le statut de l'utilisateur a été mis à jour </span>
    <?php }
    if ($_GET['addel']=="mdpOK"){ ?>
      <span class="vert"> Le mot de passe de l'utilisateur a été mis à jour </span>
    <?php }
    if ($_GET['addel']=="confMDP"){ ?>
      <span class="rouge"> La confirmation du mot de passe a échoué </span>
    <?php }
    if ($_GET['addel']=="delmais"){ ?>
      <span class="rouge"> La maison a été supprimée </span>
    <?php }
    if ($_GET['addel']=="delsal"){ ?>
      <span class="rouge"> La pièce a été supprimée </span>
    <?php }
    if ($_GET['addel']=="delcap"){ ?>
      <span class="rouge"> Le capteur a été supprimé </span>
    <?php }
    if ($_GET['addel']=="deleff"){ ?>
      <span class="rouge"> L'effecteur a été supprimé </span>
    <?php }
  }?>
<h2>
   Liste des utilisateurs
</h2>

<?php
include_once("Modele/db-utilisateur-manager.php");
include_once("Modele/db-maison-manager.php");
include_once("Modele/db-salle-manager.php");
include_once("Modele/db-capteur-manager.php");
include_once("Modele/db-effecteur-manager.php");

$reponse = $db->query('SELECT * FROM utilisateurs WHERE status = "Utilisateur principal" ORDER BY identifiant');
while ($donnees = $reponse->fetch()) {?>
  <form method="POST" action="Controleur/userSec-manager.php">
    <button class="boutonFantome" type="submit" name="delUserSecBis"
    onclick="if(!confirm('Êtes vous sur de vouloir supprimer cet utilisateur ?\nCette action sera définitive.')) return false;"
    value='<?php echo "".$donnees['id']?>' /> <img src=Vue/Image/domotech_suppr.png width=20px> </button>

  <b><?php echo $donnees['identifiant'];?> </b><button class="boutonFantome boutton " type=button onclick="toggle_div(this, '<?php echo "".$donnees['id']?>');">modifier ses infos ✎</button>
  <span class="conteneurBloc"><br>
    <button class="boutonFantome boutton " type=button onclick="toggle_div2(this, '<?php echo "".$donnees['identifiant']?>');">afficher la liste des utilisateurs secondaires du compte</button>
  </span>

  <span class="conteneurBloc"><br>
    <button class="boutonFantome boutton " type=button onclick="showlist(this, '<?php echo "list".$donnees['identifiant']?>');">afficher la liste des maisons, pièces, capteurs et effecteurs du compte</button>
  </span><br>
</form>
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
  <div class="conteneurBloc n3" id='<?php echo "list".$donnees['identifiant']?>' style="display:none;">
    <h2>
       Maisons
    </h2>
    <?php $rep = getHabitationsList($db,  $donnees["idGroupe"]); ?>

    <form method="post" action="Controleur/maison-manager.php">
      <?php while ($do = $rep->fetch()) {
         ?>

        <button class="boutonFantome" type="submit" name="delHabitationAdmin"
        onclick="if(!confirm('Êtes vous sur de vouloir supprimer cette maison ?\nCette action sera définitive.')) return false;"
        value='<?php echo "".$do['ID']?>'/> <img src=Vue/Image/domotech_suppr.png width=20px> </button>

        <b> <?php echo $do['nom'];?> </b> de superficie <b><?php echo $do['superficie'];?>m²</b> à l'adresse<b> <?php echo $do['adresse'];?></b>

        <br>
        <?php }
        $rep->closeCursor(); ?>
    </form>

    <h2>
       Pièces
    </h2>
    <?php $resultat = getSalleList($db,  $donnees["idGroupe"]); ?>

    <form method="post" action="Controleur/salle-manager.php">
      <?php while ($liste=$resultat->fetch()){ ?>

        <button class="boutonFantome" type="submit" name="salleAdmin"
        onclick="if(!confirm('Êtes vous sur de vouloir supprimer cette pièce ?\nCette action sera définitive.')) return false;"
        value='<?php echo "".$liste['ID']?>'/> <img src=Vue/Image/domotech_suppr.png width=20px> </button>

        <b> <?php echo ($liste['sal']);?> </b>dans <b><?php echo ($liste['hab']);?> </b>

        <br>
        <?php  } $resultat->closeCursor();?>
    </form>

    <h2>
       Capteurs
    </h2>
    <?php $resultat=getCapteurGroupList($db,  $donnees["idGroupe"]); ?>

    <form method="post" action="Controleur/capteur-manager.php">
      <?php while ($liste=$resultat->fetch()){?>

          <button class="boutonFantome" type="submit" name="maisonAdmin"
          onclick="if(!confirm('Êtes vous sur de vouloir supprimer ce capteur ?\nCette action sera définitive.')) return false;"
          value='<?php echo "".$liste['ID']?>'/> <img src=Vue/Image/domotech_suppr.png width=20px> </button>

          <b><?php echo ($liste['capt']);?></b> dans <b><?php echo ($liste['sal']);?></b> dans <b><?php echo ($liste['hab']);?> </b>

          <br>

    <?php  } $resultat->closeCursor();?>
    </form>

    <h2>
       Effecteurs
    </h2>
    <?php $resultat=getEffecteurGroupList($db,  $donnees["idGroupe"]); ?>

    <form method="post" action="Controleur/effecteur-manager.php">
      <?php while ($liste=$resultat->fetch()){ ?>

          <button class="boutonFantome" type="submit" name="maisonAdmin"
          onclick="if(!confirm('Êtes vous sur de vouloir supprimer ce capteur ?\nCette action sera définitive.')) return false;"
          value='<?php echo "".$liste['ID']?>'/> <img src=Vue/Image/domotech_suppr.png width=20px> </button>

          <b><?php echo ($liste['act']);?></b> dans <b><?php echo ($liste['sal']);?></b> dans <b><?php echo ($liste['hab']);?> </b>

          <br>

    <?php  } $resultat->closeCursor();?>
    </form>

  </div>
</br>
    <?php }
  $reponse->closeCursor();
  ?>
</div>
