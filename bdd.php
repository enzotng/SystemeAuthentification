<?php
$local = "localhost";
$utilisateur = "root";
$mdp = "";
$bdd = "test";

$mysqli = new mysqli($local, $utilisateur, $mdp, $bdd);

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}else{
    echo "oui";
}

?>