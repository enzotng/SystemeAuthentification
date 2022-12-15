<?php
session_start();
if (!isset($_SESSION["login_admin"])) {
    header("location: index.php");
}
?>

<?php include 'header.php'; ?>

<main>
    <section class="admin">
        <div class="box_admin">
            <?="<h1>" . "Bienvenue : " . $_SESSION["login_admin"] . "</h1>" ?>

                <div class="corps_admin">
                    <?="<p>" . "Nom : " . $_SESSION["login_admin"] . "</p>" ?>
                        <?="<p>" . "Mot de passe : " . $_SESSION["pwd_admin"] . "</p>" ?>
                </div>

                <div class="bouton_deconnexion">
                    <a href="logout.php"><i class="bi bi-box-arrow-right"></i> Déconnexion</a>
                </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>