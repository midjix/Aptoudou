<?php
session_start();
require 'config.php';

$user_id = $_SESSION['user_id'];

$statement_utilisateur = $connexion->prepare("SELECT * FROM utilisateur WHERE user_id = ?");
$statement_utilisateur->execute([$user_id]);
$membre = $statement_utilisateur->fetch();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Votre Profil</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <header>
            <img src="utilisateur1.png" alt="afficher logo utilisateur" class="logo">
        </header>
        <main class="article">
            <form action="modifier_profil.php" method="POST">
                <input type="hidden" name="user_id" value="<?php echo $membre['user_id']?>">
                <p>
                    <label for="username">Nouveau nom d'utilisateur :</label>
                    <input type="text" id="username" name="username" required>
                </p>
                <p>
                    <label for="text">Nouveau mot de passe :</label>
                    <input type="text" id="password" name="password" required>
                </p>
                <button type="submit">Mettre à jour</button>
            </form>
        </main>
    </body>
</html>
