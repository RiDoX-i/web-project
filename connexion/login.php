<?php
$serveur = 'localhost';
$login = 'root';
$pass = '';
$dataBaseName = "Sportify_data_base";

try {
    // Connect to the database
    $connexion = new PDO("mysql:host=$serveur;dbname=$dataBaseName", $login, $pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Get the login credentials
    $login_email = $_POST["email"];
    $login_password = $_POST["password"];

    $reponse = $connexion->query("SELECT * FROM account");

    // this checks avery line of the data base if it find the right one
    $_SESSION['login_success'] = false;
    while ($donnees = $reponse->fetch()){
        if ($donnees["email"] == $login_email && $donnees["mot_de_passe"] == $login_password)
            session_start();
            $_SESSION['login_success'] = true;
            $_SESSION['username'] = $donnees["prenom"];
        }


    // rediricting to the main page
    header("Location: http://localhost/web-project/main-menu/home.php");

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
