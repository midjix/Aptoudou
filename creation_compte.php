
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
            <form action="ajout.php" method="POST">
                <p><h1>Nouvel utilisateur</h1></p>
                <input type="hidden" name="user_id">
                <p>
                    <label for="mail">Mail d'utilisateur : </label>
                    <input type="mail" id="mail" name="mail"><br>
                </p>
                <p>
                    <label for="nom">Nom d'utilisateur : </label>
                    <input type="text" id="nom" name="nom"><br>
                </p>
                <p>
                    <label for="mdp">Code d'idenfication : </label>
                    <input type="text" id="mdp" name="mdp" minlenght="8"><br>
                </p>
                <button type="submit">Créer votre compte</button></a>
            </form>
            <a href="index.php"><button>Annuler</button></a>
        </main>
    </body>
</html>