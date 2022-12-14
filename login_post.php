<?php
if ($_POST) {
    require_once 'connexion.php';
    extract($_POST);

    $login = $_POST["nom"];
    $password = $_POST["mdp"];
    $type_user = $_POST["admin"];

    if ($type_user == "admin") {
        $sql = "SELECT * FROM admins where login_admin='$login' AND pwd_admin='$password'";
    } else {
        $sql = "SELECT * FROM users where login_user='$login' AND pwd_user='$password'";
    }
    $resultat = mysqli_query($bdd, $sql);
    if ($resultat) {
        if (mysqli_num_rows($resultat) == 0) {
            echo 'Utilisateur ou mot de passe incorrecte !';
        } else if ($type_user == "admin") {
            $row = mysqli_fetch_assoc($resultat);
            $_SESSION['nom'] = $row['id_admin'];
            $_SESSION['mdp'] = $row['login_admin'];
            header('Location: admin_page.php');
        } else {
            $row = mysqli_fetch_assoc($resultat);
            $_SESSION['id_user'] = $row['id_user'];
            $_SESSION['login_user'] = $row['login_user'];
            header('Location: user_page.php');
        }
    }
    mysqli_free_result($resultat);
    $bdd->close();
}
?>