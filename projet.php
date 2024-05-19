<?php
    require 'config.php';

    $id = $_GET['id'];

    $statement_projet = $connexion -> prepare("SELECT * FROM projets WHERE projet_ID = ?");
    $statement_projet -> execute([$id]);

    $projet = $statement_projet -> fetch();

    $statement_tasks = $connexion -> prepare("SELECT * FROM tasks WHERE projet_id = ?");
    $statement_tasks -> execute([$id]);

    $tasks = $statement_tasks -> fetchAll();  
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detail projet</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <header>
            <h1 class="titre">detail du projet</h1>
        </header>
        <main>
            <section>
                <p>
                    <?php
                        echo "nom = " . $projet['nom'] . "<br/>" .
                        "description = " . $projet['description'] . "<br/>" .
                        "est terminé = " . ($projet['is_done']? 'oui' : 'non') . "<br/>";
                    ?>
                </p>
            </section>
            <section>
                <ul>
                    <?php 
                        if ($tasks != NULL){
                            foreach ($tasks as $task) {
                                echo '<li><a href="detail.php?id=' . $tasks['task_id']  . '">' . ($tasks['is_done'] ? '(fait) ' :  '(à faire) ');
                                echo $tasks['nom'] . '</a>'; 
                                echo '<a href="edit_task_form.php?id=' . $tasks['task_id']  . '"> modifier</a></li>';
                            }
                        } else {
                            echo '<li>Pas de tache</li>';
                        }   
                    ?>
                    <p>
                        <form action="create_task_form.php" method="POST">
                            <input type="hidden" name="projet_ID" value="<?php echo $projet['projet_ID']; ?>">
                            <button type="submit">"Ajouter une nouvelle tache"</button>
                        </form>
                    </p>
                </ul>
            </section>
        </main>
        <p>
            <a href="your_profil.php">
                <button>retour</button>
            </a>
        </p>
    </body>
</html>