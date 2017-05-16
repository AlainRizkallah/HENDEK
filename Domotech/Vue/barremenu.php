<?php
if(isset($_SESSION["userID"])){ // est connecté
echo('
<ul class="barremenu">
        <li> <a class="barre-menu-element" href ="?cible=mon-espace/ma-maison" > Ma Maison </a> </li>
        <li> <a class="barre-menu-element" href ="?cible=monespace/capteurs.php" > Capteurs </a> </li>
        <li> <a class="barre-menu-element" href ="?cible=monespace/ajoutcapteurs.php" > Ajouter des capteurs </a> </li>
        <li> <a class="barre-menu-element" href ="?cible=monespace/consommation.php" > Consommation </a> </li>
        <li> <a class="barre-menu-element" href ="?cible=monespace/utilisateurs.php" > Utilisateurs </a> </li>
        <li> <a class="barre-menu-element" href ="?cible=monespace/piece.php" > Pièce </a> </li>
        <li> <a class="barre-menu-element" href ="?cible=monespace/effecteurs.php" > Effecteurs </a> </li>
      </ul>');
} else {
echo('
<ul class="barremenu">
  <li> <a class="barre-menu-element" href ="monespace.php" > Mon espace </a> </li>
  <li> <a class="barre-menu-element" href =".html" > Offres </a> </li>
  <li> <a class="barre-menu-element" href =".html" > Solutions </a> </li>
  <li> <a class="barre-menu-element" href =".html" > Actualités </a> </li>
  <li> <a class="barre-menu-element" href =".html" > Nous contacter </a> </li>
  <li> <a class="barre-menu-element" href  =".html" > Qui sommes nous? </a> </li>
  <li class="barre-menu-element"> <input  type="search" placeholder="Recherche"> </li>
</ul>');
}
?>
