<?php
if(isset($_SESSION["userID"])){ // est connecté
echo('
<div class="barremenu">
          <a class="barre-menu-element" href ="index.php" > Accueil </a>
         <a class="barre-menu-element" href ="?cible=monespace/mamaison.php" > Ma Maison </a>
         <a class="barre-menu-element" href ="?cible=monespace/capteurs.php" > Capteurs </a>
         <a class="barre-menu-element" href ="?cible=monespace/ajoutcapteurs.php" > Ajouter des capteurs </a>
         <a class="barre-menu-element" href ="?cible=monespace/consommation.php" > Consommation </a>
         <a class="barre-menu-element" href ="?cible=monespace/utilisateurs.php" > Utilisateurs </a>
         <a class="barre-menu-element" href ="?cible=monespace/piece.php" > Pièce </a>
         <a class="barre-menu-element" href ="?cible=monespace/effecteurs.php" > Effecteurs </a>
      </div>');
} else {
echo('
<div class="barremenu">

    <a class="barre-menu-element" href ="index.php" > Accueil </a>
    <a class="barre-menu-element" href ="monespace.php" > Mon espace </a>
    <a class="barre-menu-element" href =".html" > Offres </a>
    <a class="barre-menu-element" href =".html" > Solutions </a>
    <a class="barre-menu-element" href =".html" > Actualités </a>
    <a class="barre-menu-element" href =".html" > Nous contacter </a>
    <a class="barre-menu-element" href  =".html" > Qui sommes nous? </a>
    <a class="barre-menu-element" href  ="inscription.php" > S&apos;inscrire </a>
   </div>');
}

//<input  class="barre-menu-element" type="search" placeholder="Recherche">
?>
