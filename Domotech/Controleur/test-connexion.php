<?php
    // Controleur pour gérer le formulaire de connexion des utilisateurs

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
       // L'utilisateur vient de valider le formulaire de connexion
if(isset($_POST['btnLogin'])){
    if(!empty($_POST['userName']) && !empty($_POST['psw'])){
            include("Modele/db-utilisateur-manager.php");
            $reponse = mdp($db,$_POST['userName']);

            if($reponse->rowcount()==0){  // L'utilisateur n'a pas été trouvé dans la base de données
                $erreur = "Utilisateur inconnu";
              echo($erreur);
            } else { // utilisateur trouvé dans la base de données
                $ligne = $reponse->fetch();
                if(md5($_POST['psw'])!=$ligne['mdp']){ //md5(code): fonction qui hash le code utilisant le md5
                  //faire les fonctions encrypt et decrypt avec hashing + salting
                    $erreur = "Mot de passe incorrect";
                    echo($erreur);
                    //include("Vue/connexion_erreur.php");
                } else { // mot de passe correct, on affiche la page d'accueil
                    $_SESSION["userID"] = $ligne['id'];
                    $_SESSION["name"]=$_POST['userName'];
                    //rredirige vers la page mon esapce
                    header('Location:monespace.php?cible=monespace/accueilclient.php ');
                    die;
                    echo("connecté");
                }
            }
        } else { // L'utilisateur n'a pas rempli tous les champs du formulaire
            $erreur = "Veuillez remplir tous les champs";
            echo($erreur);//include("Vue/connexion_erreur.php");
        }
      }
    }
?>
