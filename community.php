
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
        <link rel="stylesheet" href="community.css">
    </head>
    <body>
        <p><h1>Community</h1></p>
        <header>
            <img src="utilisateur1.png" alt="afiicher logo utilisateur" class="logo">
        </header>
        <main>
            <?php
            foreach($membres as $membre){
                echo "<section>";
                echo '<a href="profil.php?id='. $membre['user_id'].'">'. $membre['username'] . '</a>';
                echo "</section>";
            }
            ?>
        </main>
    </body>
</html>




