<?php
require "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = $_POST['mail'];
    $nom = $_POST['nom'];
    $mdp = $_POST['mdp'];

    $statement = $connexion->prepare("INSERT INTO utilisateur (mail, username, mdp) VALUES (?, ?, ?)");
    $statement->execute([$mail, $nom, $mdp]);
    header("Location: index.php");
    exit();
}
?>