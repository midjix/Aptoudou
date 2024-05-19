<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $is_done = $_POST['is_done'];

    $statement = $connexion->prepare("INSERT INTO tasks (name, description, is_done) VALUES (?, ?, ?)");
    $statement->execute([$name, $description, $is_done]);

    header("Location: index.php");
    exit();
} 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Créer une nouvelle tâche</title>
    </head>
    <body>
        <h1>Créer une nouvelle tâche</h1>
        <form action="create_task_form.php" method="POST">
            <input type="hidden" name="task_id">
            <p>
            <label for="name">Nom de la tâche : </label>
            <input type="text" id="name" name="name"><br>
            </p>
            <p>
            <label for="description">Description de la tâche : </label><br>
            <textarea id="description" name="description" raw="10" cols="50"></textarea><br>
            </p>
            <p>
            <label for="is_done">Statut : </label>
            <select id="is_done" name="is_done">
                <option value="1">Fait</option>
                <option value="0">À faire</option>
            </select><br>
            </p>
            <p>
            <button type="submit">Enregistrer les modifications</button>
            </p>
        </form>
    </body>
</html>