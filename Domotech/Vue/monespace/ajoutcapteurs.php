<div class=addCapteurs>
  <p class="titreFormCapteurs">
    &nbsp Ajouter un capteur &nbsp
  </p>
  <form method="post" action="">
     <p class="textegauche">
         <label for="piece">Choisissez une pièce</label><br />
         <select name="piece" id="piece">
             <option value="piece1">Chambre</option>
             <option value="piece2">Bureau</option>
             <option value="piece3">Salon</option>
             <option value="piece4">Salle de Bain</option>
             <option value="piece5">Entrée</option>
         </select>
     </p>
     <p class="textedroite">
         <label for="piece">Choisissez un type de capteur</label><br />
         <select name="capteur" id="capteur">
             <option value="vid">Vidéosurveillance</option>
             <option value="lum">Luminosité</option>
             <option value="pres">Présence</option>
             <option value="humid">Humidité</option>
             <option value="temp">Température</option>
         </select>
     </p>
     <input type="submit" value="ajouter le capteur" />
  </form>

</div>
