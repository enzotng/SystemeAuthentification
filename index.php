<?php
session_start()
?>

<?php include 'header.php';?>
<?php include 'footer.php';?>

<?php
   $_SESSION["prenom"] = "Enzo";
   $_SESSION["nom"] = "Tang";
   $_SESSION["email"] = "enzotang@live.fr";
   $_SESSION["heure"] = time();
   header('Location: page2.php');
    exit;
?>