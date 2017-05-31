
<?php/*
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-l
RewriteRule ^([0-9a-zA-Z]+) monespace.php?cible=$1 [NC,L]*/
if(isset($_SESSION["userID"])){ // est connecté

echo('

<div class="barremenu">
          <a class="barre-menu-element" href ="monespace.php?cible=monespace/accueilclient.php" > Accueil </a>

    <a class="barre-menu-element" href ="monespace.php?cible=monespace/mamaison.php" > Ma Maison </a>
         <a class="barre-menu-element n8 " href ="monespace.php?cible=monespace/capteurs.php" > Etat des capteurs</a>
         <a class="barre-menu-element n8" href ="monespace.php?cible=monespace/ajoutcapteurs.php" > Gérer mes capteurs </a>
         <a class="barre-menu-element n8" href ="monespace.php?cible=monespace/consommation.php" > Consommation </a>
         <a class="barre-menu-element n8" href ="monespace.php?cible=monespace/utilisateurs.php" > Utilisateurs </a>
         <a class="barre-menu-element n8" href ="monespace.php?cible=monespace/piece.php" > Pièce </a>
         <a class="barre-menu-element n8" href ="monespace.php?cible=monespace/effecteurs.php" > Effecteurs </a>
      </div>
      ');
} else {

echo('
<div class="barremenu">

    <a class="barre-menu-element n8" href ="." > Accueil </a>
    <a class="barre-menu-element n8" href ="monespace.php" > Mon espace </a>
    <a class="barre-menu-element n8" href =".html" > Offres </a>
    <a class="barre-menu-element n8" href =".html" > Solutions </a>
    <a class="barre-menu-element n8" href =".html" > Actualités </a>
    <a class="barre-menu-element n8" href ="nouscontacter.php" > Nous contacter </a>
    <a class="barre-menu-element n8" href  =".html" > Qui sommes nous? </a>
    <a class="barre-menu-element n8" href  ="inscription.php" > S&apos;inscrire </a>
   </div>');
}

//<input  class="barre-menu-element" type="search" placeholder="Recherche">
?>
