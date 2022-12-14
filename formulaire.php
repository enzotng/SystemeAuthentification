<?php
session_start();
?>

<?php include 'header.php'; ?>

<main>
    <section class="formulaire">
        <form action="login_post.php" method="post">
            <h1 class="titre">Système d'authentification</h1>

            <div class="corps_form">
                <label for="nom"><i class="bi bi-person-circle"></i> Nom</label>
                <input type="text" id="nom" name="nom">
            </div>

            <div class="corps_form">
                <label for="mdp"><i class="bi bi-key-fill"></i> Mot de passe</label>
                <input type="password" id="mdp" name="mdp">
            </div>

            <div class="corps_form radio">
                <label for="user">User</label>
                <input type="radio" id="user" name="admin" value="User" checked>

                <label for="admin">Admin</label>
                <input type="radio" id="admin" name="admin" value="Admin">
            </div>

            <input type="submit" value="Se connecter">
        </form>
        <p>Copyright © 2022 Enzo Tang. All Rights Reserved.</p>
    </section>
</main>

<?php include 'footer.php'; ?>