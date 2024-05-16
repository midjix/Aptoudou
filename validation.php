<?php
   require 'config.php';

   if(isset($_POST['mail'])){
        $mail = $_POST['mail'];
        $mdp = $_POST['mdp'];
        $statement = $connexion -> prepare("SELECT * FROM utilisateur WHERE mail = $mail");
        $statement -> execute();
        
        $verification = $statement -> fetch();
        if(false){
            header("Location: your_profil.php");
            exit();
        } else {
            header("Location: index.php?message=1");
            exit();
        }
   }
?>