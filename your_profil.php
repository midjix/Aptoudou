<?php
    session_start();
    require 'config.php';
    $user_id = $_SESSION['user_id'];

    $statement_utilisateur = $connexion -> prepare("SELECT * FROM utilisateur WHERE user_id = ?");
    $statement_utilisateur -> execute([$user_id]);
    $membre = $statement_utilisateur -> fetch();

    $statement_projets = $connexion -> prepare("SELECT * FROM projets WHERE user_id = ?");
    $statement_projets -> execute([$user_id]);
    $projets = $statement_projets -> fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <main>
            <section>
                <h1>
                    bienvenue <?php echo $membre['username']?>
                </h1>
            </section>
            <section>
                <h2>votre liste de projets : </h2>
                <ul>
                    <?php 
                        if ($projets != NULL){
                            foreach ($projets as $projet) {
                                echo '<li>' . ($projet['is_done'] ? '(ternminé) ' :  '(à ternminer) ');
                                echo $projet['nom']; 
                                echo '<a href="projet.php?id=' . $task['projet_ID']  . '"> modifier</a></li>';
                            }
                        } else {
                            echo '<li>Pas de projet</li>';
                        }   
                    ?>
                </ul>
            </section>
            <section>
                <a href="deconnexion.php"><button>Deconnexion</button></a>
            </section>
        </main>
    </body>
</html>