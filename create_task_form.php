<?php
    $projet_id = $_POST['projet_ID'];
    echo "projet_id = $projet_id";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Créer une nouvelle tâche</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <header>
            <h1 class="titre">Créer une nouvelle tâche</h1>
        </header>
        <main>
            <section>
                <form action="ajout_tache.php" method="POST">
                    <input type="hidden" name="task_id">
                    <input type="hidden" name="projet_id" value="<?php echo $projet_id; ?>">
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
            </section>
            
        </main>
        <p>
            <a href="your_profil.php">
                <button>retour à votre profil</button>
            </a>
        </p>
    </body>
</html>