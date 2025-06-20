<?php
session_start(); 

$serveur = 'localhost';
$login = 'root';
$pass = '';
$dataBaseName = "Sportify_data_base";

try {
    $connexion = new PDO("mysql:host=$serveur;dbname=$dataBaseName", $login, $pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $login_email = $_POST["email"];
    $login_password = $_POST["password"];

    $reponse = $connexion->query("SELECT * FROM account");

    $_SESSION['login_success'] = false;

    while ($donnees = $reponse->fetch()) {
        if ($donnees["email"] == $login_email && $donnees["mot_de_passe"] == $login_password) {
            $_SESSION['login_success'] = true;
            $_SESSION['id_user'] = $donnees['id'];
            $_SESSION['username'] = $donnees["prenom"];
            $_SESSION['Fname'] = $donnees["nom"];
            break;
        }
    }


    if ($_SESSION['login_success']) {
        header("Location: http://localhost/web-project/main-menu/home.php");
    } else {
        header("Location: http://localhost/web-project/connexion/connexion.php");
    }

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
