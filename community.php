<?php
require 'config.php';

$statement_utilisateur = $connexion -> prepare("SELECT * FROM utilisateur");
$statement_utilisateur -> execute();
$membres = $statement_utilisateur -> fetchAll();
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Community</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <header>
            <p><h1 class="titre">Community</h1></p>
        </header>
        <main>
            <?php
            foreach($membres as $membre){
                echo "<section>";
                echo "<h1><img src='utilisateur1.png' alt='afficher logo utilisateur' class='logo'><h1/>";
                echo '<a href="profil.php?id='. $membre['user_id'].'">'. $membre['username'] . '</a>';
                echo "</section>";
            }
            echo '<p><a href="your_profil.php"><button>Revenir à votre profil</button></a></p>';
            ?>
        </main>
    </body>
</html>




