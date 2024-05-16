<?php
   require 'config.php';

   if(isset($_POST['mail'])){
        $mail = $_POST['mail'];
        $mdp = $_POST['mdp'];
        try {
            $statement = $connexion -> prepare("SELECT * FROM utilisateur WHERE mail = $mail");
            $statement -> execute();

            $verification = $statement -> fetch();

            header("Location: your_profil.php");
            exit();
        } catch (\Throwable $th) {
            header("Location: index.php?message=1");
            exit();
        }     
   }
?>