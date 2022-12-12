<?php
session_start();
?>

<?php include 'header.php'; ?>

<main>
    <section class="formulaire">
        <h1 class="titre">Formulaire de connexion</h1>
        <form action="login_post.php" method="post">
            <label for="nom"><i class="bi bi-person-circle"></i> Nom</label>
            <input type="text" id="nom" name="nom">

            <label for="mdp"><i class="bi bi-key-fill"></i> Mot de passe</label>
            <input type="password" id="mdp" name="mdp">

            <input type="submit" value="Se connecter">
        </form>
    </section>
</main>

<?php include 'footer.php'; ?>