<?php
session_start();
if (!isset($_SESSION["login_user"])) {
    header("location: index.php");
}
?>

<?php include 'header.php'; ?>

<main>
    <section class="user">
        <div class="box_user">
            <?="<h1>" . "Bienvenue : " . $_SESSION["login_user"] . "</h1>" ?>

                <div class="corps_user">
                    <?="<p>" . "Nom : " . $_SESSION["login_user"] . "</p>" ?>
                        <?="<p>" . "Mot de passe : " . $_SESSION["pwd_user"] . "</p>" ?>
                </div>

                <div class="bouton_deconnexion">
                    <a href="logout.php"><i class="bi bi-box-arrow-right"></i> Déconnexion</a>
                </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>