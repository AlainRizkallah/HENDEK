<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {

   if(isset($_POST['btnModMail'])){
     majMail();
  }
  if(isset($_POST['btnModTel'])){
    majTel();
 }

 if(isset($_POST['btnModMdp'])){
   include("../Modele/db-utilisateur-manager.php");
   session_start();
   $res = getUserInfos($db, $_SESSION['userID']);
   $infos = $res->fetch();
   if(md5($_POST['prevMdp'])!=$infos['mdp']){ //md5(code): fonction qui hash le code utilisant le md5
       $erreur = "Ancien mot de passe incorect";
       echo($erreur);
    }
   else{
     if(($_POST['newMdp'])!=$_POST['confNewMdp']){
       $erreur = "La confirmation du mot de passe a échoué";
       echo($erreur);
     }
     else{ // si les mdp sont les memes
       $password = md5($_POST['newMdp']);
       $resultat = setMdp($db , $password , $_SESSION['userID']);
       echo ($resultat);
       header ("Location: $_SERVER[HTTP_REFERER]" );
     }

   }
}
}
function majMail(){
  include("../Modele/db-utilisateur-manager.php");
  session_start();
  $resultat = setMail($db , $_POST['modMail'] , $_SESSION['userID']);
  echo ($resultat);
  header ("Location: $_SERVER[HTTP_REFERER]" );
}

function majTel(){
  include("../Modele/db-utilisateur-manager.php");
  session_start();
  $resultat = setTel($db , $_POST['modTel'] , $_SESSION['userID']);
  echo ($resultat);
  header ("Location: $_SERVER[HTTP_REFERER]" );
}
