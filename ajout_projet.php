<?php
session_start();
require "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $description = $_POST['description'];
    $nom = $_POST['nom'];
    $is_done = $_POST['is_done'];
    $user_id = $_SESSION['user_id']

    $statement = $connexion->prepare("INSERT INTO projet (nom, is_done, description, user_id) VALUES (?, ?, ?, ?)");
    $statement->execute([$nom, $is_done, $description, $user_id]);
    header("Location: your_profil.php");
    exit();
}
?>