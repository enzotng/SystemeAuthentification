<?php
session_start();
?>

<?php include 'header.php'; ?>

<main>
    <section class="formulaire">
        <form action="login.php" method="post">
            <h1 class="titre">Authentifiez-vous</h1>

            <div class="corps_form">
                <label for="user_name"><i class="bi bi-person-circle"></i> Nom</label>
                <input type="text" id="user_name" name="user_name">
            </div>

            <div class="corps_form">
                <label for="password"><i class="bi bi-key-fill"></i> Mot de passe</label>
                <input type="password" id="password" name="password">
            </div>

            <div class="corps_form radio">
                <p>Choisissez votre compte :</p>
                <label for="user">User</label>
                <input type="radio" id="user" name="radio_users" value="User" checked>

                <label for="admin">Admin</label>
                <input type="radio" id="admin" name="radio_users" value="Admin">
            </div>

            <input type="submit" id="btn_submit" name="btn_submit" value="Se connecter">
        </form>
        <p class="footer_form">Copyright © 2022 Enzo Tang. All Rights Reserved.</p>
    </section>
</main>

<?php include 'footer.php'; ?>