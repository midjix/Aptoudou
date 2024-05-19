<?php
    require 'config.php';


    if (isset($_POST['projet_ID'])) {
        $projet_ID = $_POST['projet_ID'];
        $nom = $_POST['nom'];
        $description = $_POST['description'];
        $is_done = $_POST['is_done'];

        $statement = $connexion -> prepare("UPDATE projets SET nom = ?, description = ?, is_done = ? WHERE projet_ID = ?");
        $statement -> execute([$nom, $description, $is_done, $projet_ID]);

        header("Location: your_profil.php");
        exit();
    }

    $projet_ID = $_GET['id'];
    $statement = $connexion -> prepare("SELECT * FROM projets WHERE projet_ID = ?");
    $statement -> execute([$projet_ID]);
    $projet = $statement -> fetch();


?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>modifier projet</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <header>
            <h1 class="titre">Modifier le projet</h1>
        </header>
        <form action="modifier_projet.php" method="POST">
            <section>
                <input type="hidden" name="projet_ID" value="<?php echo $projet['projet_ID']; ?>">
                <p>
                    <label for="nom">Nom du projet : </label>
                    <input type="text" id="nom" name="nom" value="<?php echo $projet['nom']; ?>"><br>
                </p>
                <p>
                    <label for="description">Description du projet : </label><br>
                    <textarea id="description" name="description" raw="10" cols="50"><?php echo $projet['description']; ?></textarea><br>
                </p>
                <p>
                    <label for="is_done">Statut : </label>
                    <select id="is_done" name="is_done">
                        <option value="1" <?php if($projet['is_done']) echo 'selected'; ?>>Fait</option>
                        <option value="0" <?php if(!$projet['is_done']) echo 'selected'; ?>>À faire</option>
                    </select><br>
                </p>
                <p>
                    <button type="submit">Enregistrer les modifications</button>
                </p>
            </section>
        </form>
        <p>
            <a href="delete_projet.php?id=<?php echo $projet['projet_ID'];?>">
                <button>Supprimer le projet</button>
            </a>
        </p>
        <p>
            <a href="your_profil.php">
                <button>retour</button>
            </a>
        </p>
    </body>
</html>