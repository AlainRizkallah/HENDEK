<!-- MODE AVEC DEUX FORMULAIRES
<ul>

  <li>
<form method="post" action="">
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
<form method="post" action="">
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

-->
<script>
    function showCapteurs(salle)
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
              document.getElementById("resultat").innerHTML = xmlhttp.responseText;

            }
        }

        xmlhttp.open("POST", "Controleur/display-capteur.php" , true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("salle="+salle);
    }
</script>

<form>
    <select name="users" onchange="showCapteurs(this.value)">
        <option value="">Sélectionnez une Salle:</option>
        <option value="0">Salle 0</option>
        <option value="1">Salle 1</option>
    </select>
</form>

  <div id="resultat"><b>Person info will be listed here.</b></div>



<form class ="formCapteurs "method="post" action=""> <!-- insérer dans le champs action la page vers laquelle est redirigé l'utilisateur lors de l'envoi du formulaire -->
   <p>
      <div class="titreFormCapteurs" <label for="capteur">&nbsp Selectionnez un capteur &nbsp</label><br /> </div>
       <br><br>

       <select name="capteur" id="capteur">
           <optgroup label="Chambre">  <!-- ASSOCIER ID 1 A LA PREMIERE OPTION dans la BDD -->
               <option value="lum1">Luminosité</option>
               <option value="temp1">Température</option>
           </optgroup>
           <optgroup label="Bureau"> <!-- ASSOCIER ID 2 A LA PREMIERE OPTION dans la BDD -->
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

<p class=pCapteurs>
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu tempor odio, varius fringilla sapien. Suspendisse ex augue, sodales quis sollicitudin ut, dictum at quam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras vel vestibulum leo. Nullam ante dui, iaculis vitae varius vel, suscipit ut turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque consequat neque vehicula tincidunt rutrum. Proin nunc ligula, vestibulum ac tellus et, venenatis pellentesque nulla. Aenean finibus est nec dapibus sollicitudin. Phasellus diam nisl, scelerisque eu dapibus et, dapibus sit amet eros. Donec euismod nibh est, at ornare massa pellentesque ut. Vivamus nec maximus dui, et sodales dolor. Ut euismod efficitur purus at congue.
</p>
