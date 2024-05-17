<?php
    session_start();
   require 'config.php';

   if(isset($_POST['mail'])){
        $mail = $_POST['mail'];
        $mdp = $_POST['mdp'];
        try {
            $statement = $connexion -> prepare("SELECT * FROM utilisateur WHERE mail = ? ");
            $statement -> execute([$mail]);

            $utilisateur = $statement -> fetch();

            if ($mdp == $utilisateur['mdp']){
                $_SESSION['user_id'] = $utilisateur['user_id'];
                header("Location: your_profil.php");
                exit();
            } else { 
                header("Location: index.php?message=1");
                exit();
            }

        } catch (\Throwable $th) {
            header("Location: index.php?message=1");
            exit();
        }     
   }
?>