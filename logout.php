<?php
session_start();

session_destroy();
?>

<?php include 'header.php';?>
<?php include 'footer.php';?>

<main>
    <section class="deconnexion">
        <h1 class="titre">Déconnexion réussie !</h1>

        <div class="bouton_deconnexion">
        <p>Copyright © 2022 Enzo Tang. All Rights Reserved.</p>    
        <a href="login.php">Se reconnecter</a>
        </div>
    </section>
</main>