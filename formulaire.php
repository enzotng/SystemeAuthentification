<?php
session_start();
?>

<?php include 'header.php'; ?>

<main>
    <section class="formulaire">
        <form action="login_post.php" method="post">
            <h1 class="titre">Formulaire de connexion</h1>

            <div class="corps_form">
                <input type="text" id="nom" name="nom">
                <label for="nom"><i class="bi bi-person-circle"></i> Nom</label>
            </div>

            <div class="corps_form">
                <input type="password" id="mdp" name="mdp">
                <label for="mdp"><i class="bi bi-key-fill"></i> Mot de passe</label>
            </div>

            <input type="submit" value="Se connecter">
        </form>
        <p>Copyright © 2022 Enzo Tang. All Rights Reserved.</p>
    </section>
</main>

<?php include 'footer.php'; ?>