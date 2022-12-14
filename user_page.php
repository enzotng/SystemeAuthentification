<?php
session_start();
?>

<?php include 'header.php'; ?>

<main>
    <section class="user">
        <div class="box_user">
            <h1>Bienvenue chef</h1>
            <?= "<p>" . "Nom : " . $_SESSION["nom"] . "</p>"?>

            <a href="logout.php">Déconnexion <i class="bi bi-box-arrow-in-right"></i></a>
        </div>
    </section>

<?php include 'footer.php'; ?>