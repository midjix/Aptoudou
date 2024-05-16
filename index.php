

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
        <main>
            <form action="validation.php" method="POST" class="article">
                <p>
                    <label for="mail">Identifiant d'utilisateur : </label>
                    <input type="mail" id="mail" name="mail"><br>
                </p>
                <p>
                    <label for="mdp">Code d'idenfication : </label>
                    <input type="text" id="mdp" name="mdp"><br>
                </p>
                <p>
                    <?php
                    if (isset($_GET[$message])){
                        if ($_GET[$message] == 1){
                            echo "Pas de compte avec ce mail";
                        } else {
                            echo "";
                        }
                    }
                    ?>
                    <button type = "submit">Se connecter</button>
                    <a href="creation_compte.php"><button>Créer un compte</button></a>
                </p> 
            </form>
        </main>
    </body>
</html>