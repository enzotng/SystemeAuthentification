<?php

// Informations base de données

define('DB_SERVEUR', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'test');

// Connexion à la base de données MySQL 
$connexion = mysqli_connect(DB_SERVEUR, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Vérifier la connexion
if ($connexion === false) {
  die("Erreur : Impossible de se connecter. " . mysqli_connect_error());
} else {
  echo "Vous êtes bien connecté à la base de données !";
}
?>