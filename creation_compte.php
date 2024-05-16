
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <header>
            <img src="logo_utilisateur.jpg" alt="afiicher logo utilisateur">
            <p><h1>Nouvel utilisateur</h1></p>
        </header>
        <main>
            <form action="validation.php">
                <p>
                    <label for="mail">Mail d'utilisateur : </label>
                    <input type="mail" id="nom" name="nom"><br>
                </p>
                <p>
                    <label for="nom">Nom d'utilisateur : </label>
                    <input type="text" id="nom" name="nom"><br>
                </p>
                <p>
                    <label for="mdp">Code d'idenfication : </label>
                    <input type="text" id="mdp" name="mdp" minlenght="8"><br>
                </p>
            </form>
            <p>
                <a href="ajout.php"><button>Créer votre compte</button></a>
                <a href="index.php"><button>Annuler</button></a>
            </p>
        </main>
    </body>
</html>