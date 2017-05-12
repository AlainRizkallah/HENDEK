<?php
if(isset($_SESSION["userID"])){ // est connecté
echo('
<<<<<<< HEAD
<link rel="stylesheet" href="Styles/monespace.css" >
<ul class="menuclient">
        <li> <a href ="monespace/mamaison.php" > Ma Maison </a> </li>
        <li> <a href ="monespace/capteurs.php" > Capteurs </a> </li>
        <li> <a href ="monespace/ajoutcapteurs.php" > Ajouter des capteurs </a> </li>
        <li> <a href ="monespace/consommation.php" > Consommation </a> </li>
        <li> <a href ="monespace/utilisateurs.php" > Utilisateurs </a> </li>
        <li> <a href ="monespace/piece.php" > Pièce </a> </li>
        <li> <a href ="monespace/effecteurs.php" > Effecteurs </a> </li>
      </ul>');
} else {
echo('
<ul class="barremenu">
=======

<ul class="barremenu">
        <li> <a href ="Vue/monespace/mamaison.php" > Ma Maison </a> </li>
        <li> <a href ="Vue/monespace/capteurs.php" > Capteurs </a> </li>
        <li> <a href ="Vue/monespace/ajoutcapteurs.php" > Ajouter des capteurs </a> </li>
        <li> <a href ="Vue/monespace/consommation.php" > Consommation </a> </li>
        <li> <a href ="Vue/monespace/utilisateurs.php" > Utilisateurs </a> </li>
        <li> <a href ="Vue/monespace/piece.php" > Pièce </a> </li>
        <li> <a href ="Vue/monespace/effecteurs.php" > Effecteurs </a> </li>
      </ul>');
} else {
echo('
<ul class="barremenu">
>>>>>>> master
  <li> <a href ="monespace.php" > Mon espace </a> </li>
  <li> <a href =".html" > Offres </a> </li>
  <li> <a href =".html" > Solutions </a> </li>
  <li> <a href =".html" > Actualités </a> </li>
  <li> <a href =".html" > Nous contacter </a> </li>
  <li> <a href =".html" > Qui sommes nous? </a> </li>
  <li> <input type="search" placeholder="Recherche"> </li>
</ul>');
}
?>
