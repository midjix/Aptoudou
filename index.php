

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
            <form action="validation.php" method="POST">
                <p>
                    <label for="mail">Identifiant d'utilisateur : </label>
                    <input type="mail" id="nom" name="nom"><br>
                </p>
                <p>
                    <label for="code">Code d'idenfication : </label>
                    <input type="text" id="code" name="code"><br>
                </p>
                <p>
                    <?php
                    if (isset($_GET[$message])){
                        echo $message;
                    }
                    ?>
                </p> 
            </form>
            <p>
                <a href="validation.php"><button>Se connecter</button></a>
                <a href="creation_compte.php"><button>Créer un compte</button></a>
            </p>
        </main>
    </body>
</html>