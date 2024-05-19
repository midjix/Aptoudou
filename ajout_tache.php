<?php
    require 'config.php';

    $name = $_POST['nom'];
    $description = $_POST['description'];
    $is_done = $_POST['is_done'];
    $projet_id = $_POST['projet_id'];

    $statement = $connexion->prepare("INSERT INTO tasks (nom, description, is_done, projet_id) VALUES (?, ?, ?, ?)");
    $statement->execute([$name, $description, $is_done, $projet_id]);

    header("Location: your_profil.php");
    exit();

?>