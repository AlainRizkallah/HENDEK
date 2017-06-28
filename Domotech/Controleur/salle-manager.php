<?php


if($_SERVER['REQUEST_METHOD'] === 'POST') {

   if(isset($_POST['btnAddSalle'])){
     dispAddSalle();
  }

  if ( (isset($_POST['btnSuppSalle'])) or (isset($_POST['salle'])) ){
    dispSuppSalle();
 }
 if ( (isset($_POST['salleAdmin'])) ){
   dispSuppSalleAdmin();
}

}

function dispAddSalle(){
  include("../Modele/db-salle-manager.php");
  $resultat = addSalle($db,$_POST['maison'],$_POST['nom']);
  echo ($resultat);
  header ("Location: ../monespace.php?cible=monespace/piece.php&addel=add" );
}
function dispSuppSalle(){
  include("../Modele/db-salle-manager.php");

  $resultat = delSalle($db, $_POST['salle']) ;
  echo ($resultat);

  header ("Location: ../monespace.php?cible=monespace/piece.php&addel=del" );
}
function dispSuppSalleAdmin(){
  include("../Modele/db-salle-manager.php");

  $resultat = delSalle($db, $_POST['salleAdmin']) ;
  echo ($resultat);

  header ("Location: ../accueiladmin.php?cible=accueiladmin/users.php&addel=delsal" );
}

?>
