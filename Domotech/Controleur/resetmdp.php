<?php
include_once("../Modele/db-utilisateur-manager.php");

if($_SERVER['REQUEST_METHOD'] === 'POST') {

   if(isset($_POST['btnReset'])){
     $email = $_POST["email"];
     $user = getUser_byMail($db , $email);
     if($user->rowcount()>0){
       $token = uniqid();
       $resultat = setForgetMdp($db , $email , $token );
       $name=$user->fetch();
       $name=$name['identifiant'];
       echo ($resultat);
       $message = "Bonjour $name <br>
       Pour réinitialiser votre mot de passe, cliquez sur le lien suivant : <br>
       <a href='localhost/HENDEK/Domotech/reinitmdp.php?token=$token'>réinitialiser mon mot de passe</a>";
       $to = $email;
       $subject = 'Réinitialisation de votre mot de passe';
       $headers = 'From: thibault.hentges@gmail.com' . "\r\n" .
          'Reply-To: thibault.hentges@gmail.com' . "\r\n" .
          'X-Mailer: PHP/' . phpversion();
       $headers .= 'MIME-Version: 1.0' . "\r\n";
       $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
       mail($to, $subject, $message, $headers);
       header ("Location: ../resetmdp.php?cible=mailsent" ); //redirige vers une page prévenant l'utilisateur qu'un email lui a été envoyé
     }else{
       header ("Location: ../resetmdp.php?cible=mailnotsent" );
     }
  }

  if(isset($_POST['btnRESETmdp'])){
    include_once("../Modele/db-utilisateur-manager.php");
    session_start();
    $res = getUserInfos($db, $_POST['btnRESETmdp']);
    $infos = $res->fetch();
    if(($_POST['newMdp'])!=$_POST['confNewMdp']){
      $token = $_GET['token'];
      header('Location: ../reinitmdp.php?cible=mdpincorrect&token='. $token);
      }
      else{ // si les mdp sont les memes
        $password = md5($_POST['newMdp']);
        $resultat = setMdp($db , $password , $_POST['btnRESETmdp']);
        echo ($resultat);
        $resultat = setForgetMdp($db , $infos['email'] , 0 ); //reset du token
        echo($resultat);
        header ("Location: ../resetmdp.php?cible=mdpreset" );
      }

 }

}

?>
