<?php
// On démarre la session
session_start ();

// On détruit les variables de notre session
session_unset ();

// On détruit notre session
session_destroy ();

// Redirection vers la page de connexion
header('Location: index.php');
?>