<?php
  $serveur = "localhost";
  $utilisateur = "root";
  $motDePasse = "";
  $baseDeDonnees = "projet";
  try {
      // Créer une connexion
      $connexion = new PDO("mysql:host=$serveur;dbname=$baseDeDonnees", $utilisateur, $motDePasse);
      echo "Connexion réussie";
  } catch(PDOException $e) {
      echo "Connexion échouée : " . $e->getMessage();
  }
?>