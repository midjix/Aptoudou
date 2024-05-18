<?php
    require 'config.php';

    $projet_ID = $_GET['id'];

    $statement_projet = $connexion->prepare("DELETE FROM projets WHERE projet_ID = ?");
    $statement_projet->execute([$projet_ID]);

    header("Location: your_profil.php");
    exit();
?>



