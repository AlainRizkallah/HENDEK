<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {

   if(isset($_POST['delNews'])){
     include("../Modele/db-news-manager.php");
     $resultat = delNews($db , $_POST['delNews']);
     echo ($resultat);
     header ("Location: $_SERVER[HTTP_REFERER]" );
  }

  if(isset($_POST['addNews'])){
    include("../Modele/db-news-manager.php");
    include_once("../Modele/nettoyer.php");
    $resultat = addNews($db , $_POST['titrenews'], $_POST['contenunews'] );
    $image = nettoyer($_POST['titrenews']);
    $dest = "../Vue/Image/news/".$image ;
    upload('picnews' , $dest , 1048576 , array('png','jpg','jpeg') );
    echo ($resultat);
    header ("Location: $_SERVER[HTTP_REFERER]" );
 }

}

function upload($index,$destination,$maxsize=FALSE,$extensions=FALSE)
{
   //teste si le fichier est correctement upload
     if (!isset($_FILES[$index]) OR $_FILES[$index]['error'] > 0) return FALSE;
   //teste la taille limite du fichier
     if ($maxsize !== FALSE AND $_FILES[$index]['size'] > $maxsize) return FALSE;
   //teste l'extension du fichier
     $ext = substr(strrchr($_FILES[$index]['name'],'.'),1);
     if ($extensions !== FALSE AND !in_array($ext,$extensions)) return FALSE;
   //place le fichier où l'on veut
     return move_uploaded_file($_FILES[$index]['tmp_name'],$destination);
}
?>
