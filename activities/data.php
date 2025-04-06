<?php

/* we should not have access to this file only if the user has already logged in */

$serveur = 'localhost';
$login = 'root';
$pass = '';
$dataBaseName = "Sportify_data_base";

try {
    $connexion = new PDO("mysql:host=$serveur;dbname=$dataBaseName", $login, $pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create the tables if they don't exist
    $sql = "CREATE TABLE IF NOT EXISTS yoga_res (
        id_reservation INT AUTO_INCREMENT PRIMARY KEY,
        id_user INT,
        date_reservation DATE,
        FOREIGN KEY (id_user) REFERENCES Account(id)
    );
    
    CREATE TABLE IF NOT EXISTS pilates_res (
        id_reservation INT AUTO_INCREMENT PRIMARY KEY,
        id_user INT,
        date_reservation DATE,
        FOREIGN KEY (id_user) REFERENCES Account(id)
    );
    
    CREATE TABLE IF NOT EXISTS musculation_res (
        id_reservation INT AUTO_INCREMENT PRIMARY KEY,
        id_user INT,
        date_reservation DATE,
        FOREIGN KEY (id_user) REFERENCES Account(id)
    );
    
    CREATE TABLE IF NOT EXISTS cycling_res (
        id_reservation INT AUTO_INCREMENT PRIMARY KEY,
        id_user INT,
        date_reservation DATE,
        FOREIGN KEY (id_user) REFERENCES Account(id)
    );
    
    CREATE TABLE IF NOT EXISTS fitness_res (
        id_reservation INT AUTO_INCREMENT PRIMARY KEY,
        id_user INT,
        date_reservation DATE,
        FOREIGN KEY (id_user) REFERENCES Account(id)
    );
    
    CREATE TABLE IF NOT EXISTS Max_members (
        id_sport INT PRIMARY KEY,
        name_sport VARCHAR(20),
        Max_Places INT
    );

    ";

    // Execute the SQL to create tables
    $connexion->exec($sql);

    // Check if any records already exist in the Max_members table
    $sql_check = "SELECT COUNT(*) FROM Max_members";
    $stmt = $connexion->query($sql_check);
    $count = $stmt->fetchColumn();

    // If there are no records in the Max_members table, insert the data
    if ($count == 0) {
        $sql_insert = "INSERT INTO Max_members (id_sport, name_sport, Max_Places) VALUES 
            (1, 'Yoga', 5),
            (2, 'Pilates', 3),
            (3, 'Musculation', 5),
            (4, 'Cycling', 3),
            (5, 'Fitness', 5)";
        $connexion->exec($sql_insert);
    }

    require("set max memebers.php");
} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
