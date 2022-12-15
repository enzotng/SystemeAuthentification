<?php
session_start();
?>

<?php include 'header.php'; ?>

<?php
if (isset($_POST["btn_submit"])) {
    require_once 'connexion.php';
    extract($_POST);

    // Récupération des données transmises du formulaire

    $login = $_POST["user_name"];
    $password = $_POST["password"];
    $type_user = $_POST["radio_users"];

    // Condition permettant de vérifier si l'utilisateur est un admin ou non

    if ($type_user == "Admin") {
        $sql = "SELECT * FROM admins WHERE login_admin='$login' AND pwd_admin='$password'";
    } else {
        $sql = "SELECT * FROM users WHERE login_user='$login' AND pwd_user='$password'";
    }
    $resultat = mysqli_query($bdd, $sql);
    
    // Message d'erreur si les champs sont vides ou incorrects

    if ($resultat) {
        if (mysqli_num_rows($resultat) == 0) {
            echo '<main>';
            echo '<section class="login">';
            echo '<h1>Utilisateur ou mot de passe incorrecte.</h1>';
            echo '<div class="bouton_redirection">';
            echo '<a href="index.php"><i class="bi bi-arrow-clockwise"></i> Réessayer</a>';
            echo '</div>';
            echo '</section>';
            echo '</main>';
        } else if ($type_user == "Admin") {
            $row = mysqli_fetch_assoc($resultat);
            $_SESSION['pwd_admin'] = $row['pwd_admin'];
            $_SESSION['login_admin'] = $row['login_admin'];
            header('Location: admin_page.php');

            // Redirection vers la page d'administration

        } else {
            $row1 = mysqli_fetch_assoc($resultat);
            $_SESSION['pwd_user'] = $row1['pwd_user'];
            $_SESSION['login_user'] = $row1['login_user'];
            header('Location: user_page.php');

            // Redirection vers la page utilisateur
        }
    }

    // Libération de la mémoire active

    mysqli_free_result($resultat);

    // Fermeture de la connexion

    $bdd->close();
}
?>

<?php include 'footer.php'; ?>