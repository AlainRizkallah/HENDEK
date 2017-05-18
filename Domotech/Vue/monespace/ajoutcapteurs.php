<!-- TODO ajouter ici liste des capteurs présents dans la BDD -->

<div class=textecentre>
  <p class="boxtitle">
    &nbsp Ajouter un capteur &nbsp
  </p>
  <form method="post" action="Controleur/addCapteur.php">
    <p>
        <label for="maison">Choisissez votre maison</label><br />
        <select name="maison">
            <option value="0">Maison principale</option>
            <option value="1">Maison secondaire n.1</option>
        </select>
    </p>
     <p class="textegauche">
         <label for="piece">Choisissez une pièce</label><br />
         <select name="piece">
             <option value="0">Chambre</option>
             <option value="1">Bureau</option>
             <option value="2">Salon</option>
             <option value="3">Salle de Bain</option>
             <option value="4">Entrée</option>
         </select>
     </p>
     <p class="textedroite">
         <label for="type">Choisissez un type de capteur</label><br />
         <select name="type">
             <option value="vid">Vidéosurveillance</option>
             <option value="lum">Luminosité</option>
             <option value="pres">Présence</option>
             <option value="humid">Humidité</option>
             <option value="temp">Température</option>
         </select>
     </p>
     <input type="submit" value="ajouter un capteur" name=addCapteur />
  </form>

</div>
