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
    $statement_follow = $connexion->prepare("INSERT INTO follow (follower_id, followed_id) VALUES (?, ?)");
    $statement_follow->execute([$follower, $followed]);

    header("Location: community.php");
    exit();
} 
catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

?>