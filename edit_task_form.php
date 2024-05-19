<?php
    require 'config.php';

    if (isset($_POST['task_id'])) {
        $task_id = $_POST['task_id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $is_done = $_POST['is_done'];

        $statement = $connexion -> prepare("UPDATE tasks SET name = ?, description = ?, is_done = ? WHERE task_id = ?");
        $statement -> execute([$name, $description, $is_done, $task_id]);

        header("Location: your_profil.php");
        exit();
    }

    $task_id = $_GET['id'];
    $statement = $connexion -> prepare("SELECT * FROM tasks WHERE task_id = ?");
    $statement -> execute([$task_id]);
    $task = $statement -> fetch();


?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>modification de la tache</title>
    </head>
    <body>
        <h1>Modifier la tache</h1>
        <form action="edit_task_form.php" method="POST">
            <input type="hidden" name="task_id" value="<?php echo $task['task_id']; ?>">
            <p>
                <label for="nom">Nom de la tâche : </label>
                <input type="text" id="nom" name="nom" value="<?php echo $task['nom']; ?>"><br>
            </p>
            <p>
                <label for="description">Description de la tâche : </label><br>
                <textarea id="description" name="description" raw="10" cols="50"><?php echo $task['description']; ?></textarea><br>
            </p>
            <p>
                <label for="is_done">Statut : </label>
                <select id="is_done" name="is_done">
                    <option value="1" <?php if($task['is_done']) echo 'selected'; ?>>Fait</option>
                    <option value="0" <?php if(!$task['is_done']) echo 'selected'; ?>>À faire</option>
                </select><br>
            </p>
            <p>
                <button type="submit">Enregistrer les modifications</button>
            </p>
            <p>
                <a href="delete_tache.php?id=<?php echo $task['task_id'];?>"><button>Supprimer la tache</button></a>
            </p>
        </form>
    </body>
</html>