<?php
session_start(); 

$serveur = 'localhost';
$login = 'root';
$pass = '';
$dataBaseName = "Sportify_data_base";

try {
    // Connect to the database
    $connexion = new PDO("mysql:host=$serveur;dbname=$dataBaseName", $login, $pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    session_unset();  // Unset all session variables

    
    header("Location: http://localhost/web-project/main-menu/home.php");

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
