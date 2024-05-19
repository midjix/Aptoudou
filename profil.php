<?php
require "config.php";
session_start();
if(isset($_GET['id'])){
    $id_profil = $_GET['id'];
    $user = $_SESSION['user_id'];

    $statement_profil = $connexion -> prepare("SELECT * FROM utilisateur WHERE user_id = ?");
    $statement_profil -> execute([$id_profil]);
    $profil = $statement_profil-> fetch();

    $statement_follow = $connexion->prepare("SELECT * FROM follow WHERE follower_id = ? AND followed_id = ?");
    $statement_follow->execute([$user, $id_profil]);
    $is_following = $statement_follow->fetch();

    $statement_projets = $connexion->prepare("SELECT * FROM projets WHERE user_id = ?");
    $statement_projets->execute([$id_profil]);
    $projets = $statement_projets->fetchAll();
}

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <header>
            <img src="utilisateur1.png" alt="afiicher logo utilisateur" class="logo">
        </header>
        <main class="article">
            <?php
            echo "<p>Voici votre profil ". $profil['username'] ."</p>";
            echo "<p></p>";
            if ($is_following) {
                echo "<h2>Projets de " . $profil['username'] . "</h2>";
                if (isset($projets)) {
                    echo "<ul>";
                    foreach ($projets as $projet) {
                        echo "<li>" . htmlspecialchars($projet['nom']) . " - " . ($projet['is_done'] ? "Terminé" : "À terminer") . "</li>";
                    }
                    echo "</ul>";
                } else {
                    echo "<p>Aucun projet trouvé.</p>";
                }
                echo '<a href="unfollow.php?user_id=' . $profil['user_id'] . '"><button>Unfollow</button></a>';
            } else {
                echo '<a href="follow.php?user_id=' . $profil['user_id'] . '"><button>Follow</button></a>';
            }
            echo '<p><a href="your_profil.php><button>Revenir à votre profil</button></a></p>';
            ?>
        </main>
    </body>
</html>