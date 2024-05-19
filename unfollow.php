<?php
require "config.php";
session_start();
$follower = $_SESSION['user_id'];
$followed = $_GET['user_id'];
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
try {
    $statement_follow = $connexion->prepare("DELETE FROM follow WHERE follower_id = ? AND followed_id = ?");
    $statement_follow->execute([$follower, $followed]);

    header("Location: community.php");
    exit();
} 
catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

?>