<?php
require 'config.php';

if(isset($_POST['projet_ID'])){
    $projet_ID = $_POST['projet_ID'];

    $statement = $connexion->prepare("DELETE FROM projets WHERE projet_ID = ?");
    $statement->execute([$projet_ID]);

    header("Location: your_profil.php");
    exit();
} 
?>