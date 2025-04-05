<?php

/* we  should not have acces to this file only if the user has already logged in */

$serveur = 'localhost';
$login = 'root';
$pass = '';
$dataBaseName = "Sportify_data_base";

try {
    // Connect to the database
    $connexion = new PDO("mysql:host=$serveur;dbname=$dataBaseName", $login, $pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // yoga pilates musculation cycling fitness peronnalizé

    // Create the table if it doesn't exist
    $sql = "CREATE TABLE IF NOT EXISTS yoga_res (
        id_reservation INT AUTO_INCREMENT PRIMARY KEY,
        id_user VARCHAR(40),
        date_reservation DATE,
        FOREIGN KEY (id_user) REFERENCES Account(id)
    );
    
    CREATE TABLE IF NOT EXISTS pilates_res (
        id_reservation INT AUTO_INCREMENT PRIMARY KEY,
        id_user VARCHAR(40),
        date_reservation DATE,
        FOREIGN KEY (id_user) REFERENCES Account(id)
    );
    
    CREATE TABLE IF NOT EXISTS musculation_res (
        id_reservation INT AUTO_INCREMENT PRIMARY KEY,
        id_user VARCHAR(40),
        date_reservation DATE,
        FOREIGN KEY (id_user) REFERENCES Account(id)
    );
    
    CREATE TABLE IF NOT EXISTS cycling_res (
        id_reservation INT AUTO_INCREMENT PRIMARY KEY,
        id_user VARCHAR(40),
        date_reservation DATE,
        FOREIGN KEY (id_user) REFERENCES Account(id)
    );
    
    CREATE TABLE IF NOT EXISTS fitness_res (
        id_reservation INT AUTO_INCREMENT PRIMARY KEY,
        id_user VARCHAR(40),
        date_reservation DATE,
        FOREIGN KEY (id_user) REFERENCES Account(id)
    );";
    
    $connexion->exec($sql);
    //echo "Table has been created.";
    
} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>