<?php
    require 'config.php';

    if(isset($_GET['id'])){
        $task_id = $_GET['id'];

        $statement = $connexion->prepare("DELETE FROM tasks WHERE task_id = ?");
        $statement->execute([$task_id]);

        header("Location: your_profil.php");
        exit();
    } 
?>