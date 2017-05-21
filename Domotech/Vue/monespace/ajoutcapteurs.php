<!-- <script>
    function showCapteurs(maison)
    {
        if (salle == "")
        {
            return;
        }
        if (window.XMLHttpRequest) {
            xmlhttp= new XMLHttpRequest();
        } else {
            if (window.ActiveXObject)
                try {
                    xmlhttp= new ActiveXObject("Msxml2.XMLHTTP");
                } catch (e) {
                    try {
                        xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
                    } catch (e) {
                        return NULL;
                    }
                }
        }

        xmlhttp.onreadystatechange = function ()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {

            }
        }
        xmlhttp.open("POST", "Controleur/display-capteur.php" , true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("salle="+salle);
    }
</script> -->


<p class="boxtitle">
   Liste des capteurs
</p><br>

<?php
include("Modele/db-capteur-manager.php");

// SUPPR CAPTEUR

$reponse = $db->query('SELECT habitation.nom hab , salle.nom sal , capteur.type capt , capteur.ID ID FROM habitation
JOIN salle ON habitation.ID=salle.idHabitation
JOIN capteur ON salle.ID=capteur.idSalle'); ?>

 <form method="post" action="Controleur/delCapteur.php">
  <p class=textedroite>
      <label class=formLabel>Choisissez le capteur à supprimer</label><br /><br />

      <select name="maison">
        <?php  while ($donnees = $reponse->fetch()) {?>
          <option value=<?php echo($donnees['ID'])?>><?php echo($donnees['capt'])?> - <?php echo($donnees['sal'])?> - <?php echo($donnees['hab'])?></option>
      <?php  }
      $reponse->closeCursor(); ?>
      <input type="submit" value="supprimer"/>
 </form>

      </select>
  </p>


<!-- LISTE CAPTEURS -->

<?php
//jointure de 3 tables
$resultat=$db->query('SELECT habitation.nom hab , salle.nom sal , capteur.type capt FROM habitation
JOIN salle ON habitation.ID=salle.idHabitation
JOIN capteur ON salle.ID=capteur.idSalle');

  while ($liste=$resultat->fetch()){
    echo ($liste['capt']);?> dans <?php echo ($liste['sal']);?> dans <?php echo ($liste['hab']);?> <br>
<?php  } $resultat->closeCursor();?>

<br><br><br>

  <p class="boxtitle">
  Ajouter un capteur
  </p>
  <form method="post" action="Controleur/addCapteur.php">
    <p>
        <label for="maison">Choisissez votre maison</label><br />
        <select name="maison">

          <?php $reponse = $db->query('SELECT * FROM habitation');

          while ($donnees = $reponse->fetch()) {?>                                       <!-- affiche les maisons presente dans la BDD -->
            <option value=<?php echo($donnees['ID'])?>><?php echo($donnees['nom'])?></option>
         <?php } $reponse->closeCursor();?>

        </select>
    </p>
     <p class="textegauche">
         <label for="piece">Choisissez une pièce</label><br />
         <select name="piece">
           <?php $reponse = $db->query('SELECT * FROM salle');

           while ($donnees = $reponse->fetch()) {?>
             <option value=<?php echo($donnees['ID'])?>><?php echo($donnees['nom'])?></option>
          <?php } $reponse->closeCursor();?>
         </select>
     </p>
     <p class="textedroite">
         <label for="type">Choisissez un type de capteur</label><br />
         <select name="type">
             <option value="Vidéosurveillance">Vidéosurveillance</option>
             <option value="Luminosité">Luminosité</option>
             <option value="Présence">Présence</option>
             <option value="Humidité">Humidité</option>
             <option value="Température">Température</option>
         </select>
     </p><br><br><br><br><br>
     <input type="submit" value="ajouter un capteur"/>
  </form>

</div>
