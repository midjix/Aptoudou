<?php
require 'config.php';

if(isset($_GET['id'])){
    $projet_ID = $_POST['id'];

    $statement = $connexion->prepare("DELETE FROM projets WHERE projet_ID = $projet_ID");
    $statement->execute();

    header("Location: your_profil.php");
    exit();
} 
?>