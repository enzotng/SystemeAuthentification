<?php
session_start();
?>

<?php include 'header.php'; ?>

<?php

if ($nom == $_SESSION[$nom]) {
    echo "Haha";
} else {
    header('Location: index.php');
    exit();
}

?>


<main>
    <section class="user">
        <div class="box_user">
            <h1>Bienvenue chef</h1>
            <?= "<p>" . "Nom : " . $_SESSION["nom"] . "</p>"?>
        </div>
    </section>

<?php include 'footer.php'; ?>