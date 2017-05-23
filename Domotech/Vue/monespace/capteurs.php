<?php
include("Modele/db-maison-manager.php");
include("Modele/db-salle-manager.php");

 ?>
<script  async defer src="js/showElement.js"></script>
<div class="dropdown left" >
      <button class="boutton">Sélection de la Salle:</button>

        <div class="dropdown-content">

          <?php
          $resultat=getSalleList($db, $_SESSION['idGroupe']);
          //$resultat = getSallesList($db,$idHabitation);
            while ($liste=$resultat->fetch()){?>
              <button onclick= showCapteurs(<?php echo($liste['ID']);?>,'Controleur/display-capteur.php') class="boutton"><?php echo($liste['sal']);?></button>
          <?php } $resultat->closeCursor();?>

        </div>

</div>
<div class=" center">
    <h2 id="nomSalle"></h2>
    <div id="resultat" ></div>
</div>







<!--<form class ="formCapteurs "method="post" action="">  <!--insérer dans le champs action la page vers laquelle est redirigé l'utilisateur lors de l'envoi du formulaire -
   <p>
      <div class="boxtitle" <label for="capteur"> Selectionnez un capteur</label><br /> </div>
       <br><br>

       <select name="capteur" id="capteur">
           <optgroup label="Chambre">  <!--ASSOCIER ID 1 A LA PREMIERE OPTION dans la BDD
               <option value="lum1">Luminosité</option>
               <option value="temp1">Température</option>
           </optgroup>
           <optgroup label="Bureau"> <!-- ASSOCIER ID 2 A LA PREMIERE OPTION dans la BDD
             <option value="vid2">Vidéosurveillance</option>
             <option value="lum2">Luminosité</option>
             <option value="pres2">Présence</option>
             <option value="temp2">Température</option>
           </optgroup>
            <optgroup label="Salon">
              <option value="vid3">Vidéosurveillance</option>
              <option value="lum3">Luminosité</option>
              <option value="pres3">Présence</option>
              <option value="temp3">Température</option>
           </optgroup>
           <optgroup label="Salle de Bain">
             <option value="lum4">Luminosité</option>
             <option value="pres4">Présence</option>
             <option value="humid4">Humidité</option>
             <option value="temp4">Température</option>
          </optgroup>
          <optgroup label="Entrée">
              <option value="vid5">Vidéosurveillance</option>
              <option value="lum5">Luminosité</option>
              <option value="pres5">Présence</option>
              <option value="humid5">Humidité</option>
              <option value="temp5">Température</option>
          </optgroup>
          <input type="submit" value="Valider" />
       </select>
   </p>
</form>
-->
