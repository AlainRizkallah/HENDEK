<?php
    // Controleur pour gérer le formulaire de connexion des utilisateurs

    if($_SERVER['REQUEST_METHOD'] === 'POST') { // L'utilisateur vient de valider le formulaire de connexion
        if(isset($_POST['btnLogin']) && !empty($_POST['userName']) && !empty($_POST['psw'])){
            include("Modele/db-get-login.php");


            $reponse = mdp($db,$_POST['userName']);

            if($reponse->rowcount()==0){  // L'utilisateur n'a pas été trouvé dans la base de données
                $erreur = "Utilisateur inconnu";
                //include("Vue/connexion_erreur.php");
            } else { // utilisateur trouvé dans la base de données
                $ligne = $reponse->fetch();
                if(md5($_POST['psw'])!=$ligne['mdp']){ // Le mot de passe entré ne correspond pas à celui stocké dans la base de données
                    $erreur = "Mot de passe incorrect";
                    //include("Vue/connexion_erreur.php");
                } else { // mot de passe correct, on affiche la page d'accueil
                    $_SESSION["userID"] = $ligne['id'];
                    //include("Vue/accueil.php");
                }
            }
        } else { // L'utilisateur n'a pas rempli tous les champs du formulaire
            $erreur = "Veuillez remplir tous les champs";
            echo($erreur);//include("Vue/connexion_erreur.php");
        }
    } else { // La page de connexion par défaut
        //include("Vue/non_connecte.php");
    }
?>
