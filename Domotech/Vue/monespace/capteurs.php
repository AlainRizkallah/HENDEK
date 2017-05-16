Exemple double formulaires :
<ul>

  <li>
<form method="post" action=""> <!-- insérer dans le champs action la page vers laquelle est redirigé l'utilisateur lors de l'envoi du formulaire -->
   <p>
       <label for="piece">Choisissez une pièce</label><br />
       <select name="piece" id="piece">
           <option value="piece1">Chambre enfants</option>
           <option value="piece2">Chambre parentale</option>
           <option value="piece3">Salle de bain</option>
           <option value="piece4">Cusine</option>
       </select>
   </p>
</form>
 </li>

 <li>
<form method="post" action=""> <!-- insérer dans le champs action la page vers laquelle est redirigé l'utilisateur lors de l'envoi du formulaire -->
  <p>
      <label for="capteur">Choisissez un capteur</label><br />
      <select name="capteur" id="capteur">
          <option value="temp">Temperature</option>
          <option value="humidite">Humidité</option>
      </select>
  </p>
</form>
</li>

</ul>

<br> <br> <br> <br>
Exemple formulaire 2 en 1.

<form method="post" action="">
   <p>
       <label for="capteur">Choisissez un capteur</label><br />
       <select name="capteur" id="capteur">
           <optgroup label="Chambre enfant">
               <option value="temp1">Temperature</option>
               <option value="humidite1">Humidité</option>
           </optgroup>
           <optgroup label="Chambre parentale">
               <option value="temp2">Temperature</option>
               <option value="humidite2">Humidité</option>
       </select>
   </p>
</form>
