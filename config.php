<?php
  $serveur = "localhost";
  $utilisateur = "root";
  $motDePasse = "";
  $baseDeDonnees = "phpjour3miniprojet";
  try {
      // Créer une connexion
      $connexion = new PDO("mysql:host=$serveur;dbname=$baseDeDonnees", $utilisateur, $motDePasse);
      echo "Connexion réussie";
  } catch(PDOException $e) {
      echo "Connexion échouée : " . $e->getMessage();
  }
?>