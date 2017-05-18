<div class=addCapteurs>
  <p class="titreFormCapteurs">
    &nbsp Ajouter une pièce à ma maison &nbsp
  </p>
  <form method="post" action="Controleur/addSalle.php">
     <p class="textegauche">
         <label for="maison">Choisissez une maison</label><br />
         <select name="maison">
             <option value="0">Maison principale</option>
             <option value="1">Maison secondaire n.1</option>
         </select>
     </p>
     <div class="inputpiece">
     <p class="textedroite">
         <label for="nom">Nommez votre pièce</label><br />
         <input type="text" name="nom" />
     </p>
     <input type="submit" value="ajouter la pièce" name=addSalle />
     </div>

  </form>

</div>
