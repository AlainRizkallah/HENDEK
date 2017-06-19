
<?php
if(isset($_SESSION["userID"])){ // est connecté

echo('

<div class="barremenu">
          <a class="barre-menu-element" href ="monespace.php?cible=monespace/accueilclient.php" > Mon Espace </a>
          <a class="barre-menu-element" href ="monespace.php?cible=monespace/mamaison.php" > Ma Maison </a>
          <a class="barre-menu-element  " href ="monespace.php?cible=monespace/capteurs.php" > Etat des capteurs/effecteurs</a>
          <a class="barre-menu-element " href ="monespace.php?cible=monespace/piece.php" > Pièces </a>
          <a class="barre-menu-element " href ="monespace.php?cible=monespace/ajoutcapteurs.php" > Gérer mon installation </a>
          <a class="barre-menu-element " href ="monespace.php?cible=monespace/utilisateurs.php" > Utilisateurs </a>
          <a class="barre-menu-element " href ="monespace.php?cible=monespace/consommation.php" > Consommation </a>

      </div>
      ');
} else {

echo('
<div class="barremenu">

    <a class="barre-menu-element " href ="." > Accueil </a>
    <a class="barre-menu-element " href ="monespace.php" > Mon espace </a>
    <a class="barre-menu-element " href =".html" > Offres </a>
    <a class="barre-menu-element " href =".html" > Solutions </a>
    <a class="barre-menu-element " href =".html" > Actualités </a>
    <a class="barre-menu-element " href ="nouscontacter.php" > Nous contacter </a>
    <a class="barre-menu-element " href  =".html" > Qui sommes nous? </a>
    <a class="barre-menu-element " href  ="inscription.php" > S&apos;inscrire </a>
   </div>');
}

//<input  class="barre-menu-element" type="search" placeholder="Recherche">
?>
