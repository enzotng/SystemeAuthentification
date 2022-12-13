<?php
session_start();
?>

<?php include 'header.php'; ?>

<main>

    <!--Hey! This is the original version
of Simple CSS Waves-->

    <div class="header">
        <!--Waves Container-->
        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave"
                        d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
            </svg>
        </div>
        <!--Waves end-->

    </div>
    <!--Header ends-->

    <section class="formulaire">
        <h1 class="titre">Formulaire de connexion</h1>
        <form action="login_post.php" method="post">
            <label for="nom"><i class="bi bi-person-circle"></i> Nom</label>
            <input type="text" id="nom" name="nom">

            <label for="mdp"><i class="bi bi-key-fill"></i> Mot de passe</label>
            <input type="password" id="mdp" name="mdp">

            <input type="submit" value="Se connecter">
        </form>
</div>
    </section>
</main>

<?php include 'footer.php'; ?>