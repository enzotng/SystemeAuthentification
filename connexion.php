<?php
session_start();
?>

<?php include 'header.php'; ?>
<?php include 'bdd.php'; ?>

<?php include 'footer.php'; ?>

<?php
if ($_POST) {
    require_once 'connexion.php';
    extract($_POST);
    if ($type_user == "admin") {
        $sql = "VOTRE REQUETE SQL";
    } else {
        $sql = "VOTRE REQUETE SQL ";
    }
    $resultat = mysqli_query($bdd, $sql);
    if ($resultat) {
        if (mysqli_num_rows($resultat) == 0) {
            echo 'Utilisateur ou mot de passe
incorrecte !!';
        } else if ($type_user == "admin") {
            $row = mysqli_fetch_assoc($resultat);
            $_SESSION['id_admin'] = $row['id_admin'];
            $_SESSION['login_admin'] = $row['login_admin'];

        } else {
            $row = mysqli_fetch_assoc($resultat);
            $_SESSION['id_user'] = $row['id_user'];
            $_SESSION['login_user'] = $row['login_user'];

        }
    }
}
?>