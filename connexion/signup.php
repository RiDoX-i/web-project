<?php
$serveur = 'localhost';
$login = 'root';
$pass = '';
$dataBaseName = "Sportify_data_base";

try {
    $connexion = new PDO("mysql:host=$serveur;dbname=$dataBaseName", $login, $pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $name = $_POST["name"];
    $fname = $_POST["fname"];
    $gender = $_POST["gender"];
    $dataNS = $_POST["birth-date"];
    $cp = $_POST["cp"];
    $city = $_POST["city"];
    $adress = $_POST["adress"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $reponse = $connexion->query("SELECT * FROM account");
    $exists = false;
    while ($donnees = $reponse->fetch()) {
        if ($donnees["email"] == $email) {
            $exists = true;
            break;
        } else {
            $exists = false;
        }
    }

    if (!$exists) {
        $sql = "INSERT INTO Account (nom, prenom, genre, datens, CP, ville, adresse, email, mot_de_passe)
                VALUES ('$name', '$fname', '$gender', '$dataNS', '$cp', '$city', '$adress', '$email', '$password')";
        
        $stmt = $connexion->exec($sql);

        if ($stmt) {
            echo "Account has been created successfully!";
        } else {
            echo "Failed to create account.";
        }
    } else {
        echo "An account already exists with the same email.";
    }

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
