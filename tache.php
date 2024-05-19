<?php
require 'config.php';
$id = $_GET['id'];
$statement = $connexion -> prepare("SELECT * FROM tasks WHERE task_id = $id");
$statement -> execute();

$task = $statement -> fetch();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detail</title>
    </head>
    <body>
        <header>
            <h1 class="titre">detail de la tache</h1>
        </header>
        <main>
            <section>
                <p>
                    <?php
                        echo "nom = " . $task['nom'] . "<br/>" .
                        "description = " . $task['description'] . "<br/>" .
                        "est fait = " . ($task['is_done']? 'oui' : 'non') . "<br/>";
                    ?>
                </p>
            </section>
        </main>
        <section>
            <p><a href="index.php">retour</a></p>
        </section>
    </body>
</html>