<?php
require "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = $_POST['mail'];
    $nom = $_POST['nom'];
    $mdp = $_POST['mdp'];

    $statement = $connexion->prepare("INSERT INTO utilisateur (mail, nom, mdp) VALUES ($mail, $nom, $mdp)");
    $statement->execute();
    header("Location: index.php");
    exit();
}
?>