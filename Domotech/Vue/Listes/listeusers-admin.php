<script type="text/javascript" src="js/affichermodif_2.js"></script>


  <?php $liste=$resultat->fetch();        // POUR NE PAS QUE L'UTILISATEUR PRINCIPAL S'AFFICHE
  while ($liste=$resultat->fetch()){?>
<form method="post" action="Controleur/userSec-manager.php">
        <button class="boutonFantome" type="submit" name="delUserSecBis"
        onclick="if(!confirm('Êtes vous sur de vouloir supprimer cet utilisateur ?\nCette action sera définitive.')) return false;"
        value='<?php echo "".$liste['id']?>'/> <img src=Vue/Image/domotech_suppr.png width=20px> </button>

        <b> <?php echo ($liste['identifiant']);?></b>, <u>statut :</u> <b><?php echo ($liste['status']);?> </b>


        <span class="conteneurBloc"><br>
          <button class="boutonFantome boutton " type=button onclick="toggle_div(this, '<?php echo "".$liste['id']?>');">modifier ses infos ✎</button>
        </span><br>
        <div id='<?php echo "".$liste['id']?>' style="display:none;">
          </form>
          <p class=formLabel>Statut</p>
          <form method="post" action="Controleur/modifUser.php">
            <select name="statut" required>
              <option class=formLabel value="" disabled selected></option>
              <option value="Utilisateur secondaire">Utilisateur secondaire</option>
              <option value="Enfant">Enfant</option>
            </select><br><br>
            <button type="submit" value='<?php echo "".$liste['id']?>' name="btnModStatut">modifier</button>
          </form>
          <p class=formLabel>Mot de passe</p>
          <form method="post" action="Controleur/modifUser.php">
            <input type=password placeholder="Entrez le nouveau mot de passe" name=newMdp required><br>
            <input type=password placeholder="Confirmez le nouveau mot de passe" name=confNewMdp required><br><br>
            <button type="submit" value='<?php echo "".$liste['id']?>' name="btnModMdpSec">modifier</button>
          </form>
          <br><br>
        </div>
        <?php  } $resultat->closeCursor();?>
