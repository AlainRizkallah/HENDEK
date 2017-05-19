<!-- <script>
    function showCapteurs(capteur)
    {
        if (capteur == "")
        {
            //return;
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
              //document.getElementById("resultat").innerHTML = xmlhttp.responseText;

            }
        }
        xmlhttp.open("POST", "Controleur/delCapteur.php" , true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("capteur=");
    }
</script> -->

<!-- TODO ajouter option retirer capteur -->
<div class=textecentre>

<p class="boxtitle">
  &nbsp; Liste des capteurs &nbsp;
</p><br>

<?php
include("Modele/db-capteur-manager.php");
$reponse = $db->query('SELECT * FROM capteur');
$donnees = $reponse->fetch();
$rep = $db->query('SELECT * FROM habitation');
$do = $rep->fetch();
while ($donnees = $reponse->fetch()) {
  echo $donnees['type'];?> dans la salle <?php echo $donnees['idSalle']?> de la maison <?php echo $do['nom']?>


  <br> <?php }
//TODO menu déroulant + checkbox
$reponse->closeCursor();
 ?><?php
 $reponse = $db->query('SELECT * FROM capteur');
 $donnees = $reponse->fetch();
 ?>

  <form method="post" action="Controleur/delCapteur.php">
   <p>
       <label>Choisissez le capteur à supprimer</label><br />

       <select name="maison">
         <?php  while ($donnees = $reponse->fetch()) {?>
           <option value=<?php echo($donnees['ID'])?>><?php echo($donnees['type'])?>, Pièce <?php echo($donnees['idSalle'])?>, Maison <?php echo($donnees['idHabitation'])?></option>
       <?php  }
       $reponse->closeCursor(); ?>
       <input type="submit" value="supprimer" name=delCapteur />
  </form>

       </select>
   </p>




<!--  -->

<br><br><br>

  <p class="boxtitle">
    &nbsp; Ajouter un capteur &nbsp;
  </p>
  <?php $reponse = $db->query('SELECT * FROM habitation');
  $donnees = $reponse->fetch(); ?>
  <form method="post" action="Controleur/addCapteur.php">
    <p>
        <label for="maison">Choisissez votre maison</label><br />
        <select name="maison">
          <?php  while ($donnees = $reponse->fetch()) {?>
            <option value=<?php echo($donnees['ID'])?>><?php echo($donnees['nom'])?> </option>
          <?php  } $reponse->closeCursor();?>
        </select>
    </p>
     <p class="textegauche">

       <?php
       $reponse = $db->query('SELECT * FROM salle');
       $donnees = $reponse->fetch();
       $rep = $db->query('SELECT * FROM habitation');
       $do = $rep->fetch(); ?>

         <label for="piece">Choisissez une pièce</label><br />
         <select name="piece">
           <?php  while ($do = $rep->fetch()) {?>
             <optgroup label=<?php echo($do['nom'])?>>
               <?php  while ($donnees = $reponse->fetch()) {?>
                 <option value=<?php echo($donnees['ID'])?>><?php echo($donnees['nom'])?> </option>
           <?php  } }?>


         </select>
         <?php $reponse->closeCursor(); ?>
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
     </p>
     <input type="submit" value="ajouter un capteur" name=addCapteur />
  </form>

</div>
