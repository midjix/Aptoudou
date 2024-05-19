<?php
    $projet_id = $_POST['projet_ID'];
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
        <form action="ajout_tache.php" method="POST">
            <input type="hidden" name="task_id">
            <input type="hidden" name="projet_id" value="<?php echo $projet['projet_id']; ?>">
            <p>
            <label for="nom">Nom de la tâche : </label>
            <input type="text" id="nom" name="nom"><br>
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