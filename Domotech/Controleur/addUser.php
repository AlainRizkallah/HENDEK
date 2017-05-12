<?php
    // Controleur pour gérer le formulaire de connexion des utilisateurs

    if($_SERVER['REQUEST_METHOD'] === 'POST') { // L'utilisateur vient de valider le formulaire de connexion
    if(isset($_POST['btnRegister']) && !empty($_POST['regUserName']) && !empty($_POST['regMdp'])){
            include("Modele/db-utilisateur-manager.php");


<<<<<<< HEAD

=======
>>>>>>> master
            $reponse = userExist($db,$_POST['regUserName']);
            $donne = $reponse->fetch();
            if($donne[0]==0){

              $resultat = addUser($db,$_POST['regUserName'],$_POST['regMdp'],$_POST['email'],$_POST['nom'],$_POST['prenom'],$_POST['tel']);
              echo ($resultat);

            } else { // utilisateur trouvé dans la base de données
              //ajouter vérif email existe déjà
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
