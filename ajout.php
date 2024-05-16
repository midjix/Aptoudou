<?php
require "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = $_POST['mail'];
    $nom = $_POST['nom'];
    $mdp = $_POST['mdp'];

    $ajouter_utilisateur = $connexion->prepare("INSERT INTO utilisateur (mail, nom, mdp) VALUES ($mail, $nom, $mdp)");
    $ajouter_utilisateur->execute();
    
    header("Location: index.php");
    exit();
}
?>