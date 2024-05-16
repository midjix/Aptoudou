
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
</head>
<body>
    <header>
        <p><h1>Community</h1></p>
    </header>
    <main>
        
    </main>
</body>
</html>



<?php
foreach($membres as $membre){
    echo "<section>";
    echo "<img src='logo_utilisateur.jpg' alt='afiicher logo utilisateur'>"
    echo '<a href="profil.php?id='. $membre['user_id'].'">'. $membre['username'] . '</a>'
    echo '<a href="follow.php?id='. $membre['user_id'].'">Follow</a>'
    echo '<a href="unfollow.php?id='. $membre['user_id'].'">Unfollow</a>'
    echo "</section>";
}
?>
