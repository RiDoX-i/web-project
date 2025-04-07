<?php
$serveur = 'localhost';
$login = 'root';
$pass = '';
$dataBaseName = "Sportify_data_base";

try {
    $connexion = new PDO("mysql:host=$serveur;dbname=$dataBaseName", $login, $pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    session_start();

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

    $_SESSION['email_used'] = $exists; // true if the email is already used
  
    
    if (!$exists) { // the email is never used
        $sql = "INSERT INTO Account (nom, prenom, genre, datens, CP, ville, adresse, email, mot_de_passe)
                VALUES ('$name', '$fname', '$gender', '$dataNS', '$cp', '$city', '$adress', '$email', '$password')";
        
        $stmt = $connexion->exec($sql);

        header("Location: http://localhost/web-project/connexion/connexion.php");
    }else {
        header("Location: http://localhost/web-project/connexion/connexion.php");
    }

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
