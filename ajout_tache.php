<?php
    require 'config.php';

    $name = $_POST['name'];
    $description = $_POST['description'];
    $is_done = $_POST['is_done'];

    $statement = $connexion->prepare("INSERT INTO tasks (name, description, is_done) VALUES (?, ?, ?)");
    $statement->execute([$name, $description, $is_done]);

    header("Location: index.php");
    exit();

?>