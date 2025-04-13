<?php
$serveur = 'localhost';
$login = 'root';
$pass = '';

try {
    $connexion = new PDO("mysql:host=$serveur", $login, $pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $databaseName = "Sportify_data_base";
    
    $sql = "CREATE DATABASE IF NOT EXISTS $databaseName";
    $connexion->exec($sql);
 //   echo "Database has been created.<br>";
    
    $connexion->exec("USE $databaseName");
    
    $sql = "CREATE TABLE IF NOT EXISTS Account (
                id INT AUTO_INCREMENT PRIMARY KEY,
                nom VARCHAR(40),
                prenom VARCHAR(40),
                genre VARCHAR(6),
                datens DATE,
                CP INT,
                ville VARCHAR(40),
                adresse VARCHAR(60),
                email VARCHAR(100),
                mot_de_passe VARCHAR(40)
            )";
    $connexion->exec($sql);
    //echo "Table has been created.";
    
} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>