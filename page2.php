<?php
session_start()
?>

<?php include 'header.php';?>

<main>
    <section class="accueil">
        <h1 class="titre">Vos informations</h1>
        <div class="box_infos">
            <div class="row_infos">
                <div class="corps_infos">
                    <?= "<p>" . "Prénom : " . $_SESSION["prenom"] . "</p>"?>
                    <?= "<p>" . "Nom : " . $_SESSION["nom"] . "</p>"?>
                </div>
                <div class="corps_infos">
                    <?= "<p>" . "Email : " . $_SESSION["email"] . "</p>"?>
                    <?= "<p>" . "Heure : " . $_SESSION["heure"] . " " . "|" . " " . date( "d/m/Y H:i:s") . "</p>"?>
                </div>
            </div>
        </div>

        <div class="bouton_deconnexion">
        <p>Copyright © 2022 Enzo Tang. All Rights Reserved.</p>    
        <a href="logout.php"><i class="bi bi-box-arrow-right"></i> Déconnexion</a>
        </div>
    </section>
</main>

<?php include 'footer.php';?>