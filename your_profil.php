<?php
    require 'config.php';
    $id = $_GET['id'];

    $statement_utilisateur = $connexion -> prepare("SELECT * FROM utilisateur WHERE user_id = $id");
    $statement_utilisateur -> execute();
    $membres = $statement_utilisateur -> fetch();

    $statement_projets = $connexion -> prepare("SELECT * FROM projets WHERE user_id = $id");
    $statement_projets -> execute();
    $projets = $statement_projets -> fetch();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <main>
            <section>
                <h1>
                    bienvenue <?php echo $membre['username']?>
                </h1>
            </section>
            <section>
                <h2>votre liste de projets : </h2>
                <ul>
                    <?php foreach($projets as $projet): ?>
                        <li>
                            <?= $projet['is_done'] ? '(ternminé) ' :  '(à ternminer) '; ?>
                            <?= $projet['nom']; ?>
                            <a href="projet.php?id=<?= $task['projet_ID']; ?>"> modifier</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </section>
        </main>
    </body>
</html>