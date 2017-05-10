<?php
    // Controleur pour gérer le formulaire de connexion des utilisateurs

    if($_SERVER['REQUEST_METHOD'] === 'POST') { // L'utilisateur vient de valider le formulaire de connexion
    if(isset($_POST['btnRegister']) && !empty($_POST['userName']) && !empty($_POST['psw']) && !empty($_POST['email']) && !empty($_POST['Nom']) && !empty($_POST['Prenom'])){
            include("Modele/db-get-login.php");

            //$reponse = userExist($db,$_POST['userName']);
            $reponse = userExist($db,$_POST['userName'],$_POST['email']);
            $donne = $reponse->fetch();
            if($donne[0]==0){

              $resultat = addUser($db,$_POST['userName'],$_POST['psw'],$_POST['email'],$_POST['Nom'],$_POST['Prenom']);
              echo ($resultat);

            } else { // utilisateur trouvé dans la base de données
              $erreur = "Utilisateur existe déjà";
            echo($erreur);
            }
        } else { // L'utilisateur n'a pas rempli tous les champs du formulaire
            $erreur = "Veuillez remplir tous les champs";
            echo($erreur);//include("Vue/connexion_erreur.php");
        }
    } else { // La page de connexion par défaut
        //include("Vue/non_connecte.php");
    }
?>
