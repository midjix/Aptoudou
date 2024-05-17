<?php
require "config.php";
session_start();
if(isset($_GET['id'])){
    $id_profil = $_GET['id'];
    $statement_profil = $connexion -> prepare("SELECT * FROM utilisateur WHERE user_id = ?");
    $statement_profil -> execute([$id_profil]);
    $profil = $statement_profil-> fetch();
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
            echo "<p>Voici votre profil". $profil['username'] ."</p>";
            echo "<p></p>";
            echo '<a href="follow.php?id='. $profil['user_id'].'"><button>Follow</button></a>';
            echo '<a href="unfollow.php?id='. $profil['user_id'].'"><button>Unfollow</button></a>';
            ?>
        </main>
    </body>
</html>