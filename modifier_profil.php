<?php
require 'config.php';

$user_id = $_POST['user_id'];
$new_username = $_POST['username'];
$new_password = $_POST['password'];
$statement = $connexion->prepare("UPDATE utilisateur SET username = ?, mdp = ? WHERE user_id = ?");
$statement->execute([$new_username, $new_password, $user_id]);

header("Location: your_profil.php");
exit();


?>