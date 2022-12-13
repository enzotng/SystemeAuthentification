<?php
session_start();
if (isset($_POST['nom']) && isset($_POST['mdp'])) {
    // connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name = 'tp';
    $db_host = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password, $db_name)
        or die('could not connect to database');

    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = mysqli_real_escape_string($db, htmlspecialchars($_POST['nom']));
    $password = mysqli_real_escape_string($db, htmlspecialchars($_POST['mdp']));

    if ($username !== "" && $password !== "") {
        $requete = "SELECT count(*) FROM users where 
 login_user = '" . $username . "' and pwd_user = '" . $password . "' ";
        $exec_requete = mysqli_query($db, $requete);
        $reponse = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if ($count != 0) // nom d'utilisateur et mot de passe correctes
        {
            $_SESSION['nom'] = $username;
            header('Location: user_page.php');
        } else {
            header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    } else {
        header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
    }
} else {
    header('Location: login.php');
}
mysqli_close($db); // fermer la connexion
?>