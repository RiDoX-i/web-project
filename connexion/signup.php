<?php
$serveur = 'localhost';
$login = 'root';
$pass = '';
$dataBaseName = "Sportify_data_base";

try {
    // Correct PDO connection string (fixed 'bdname' to 'dbname')
    $connexion = new PDO("mysql:host=$serveur;dbname=$dataBaseName", $login, $pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Retrieving POST data
    $name = $_POST["name"];
    $fname = $_POST["fname"];
    $gender = $_POST["gender"];
    $dataNS = $_POST["birth-date"];
    $cp = $_POST["cp"];
    $city = $_POST["city"];
    $adress = $_POST["adress"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // checking if the email already exists

    $reponse = $connexion->query("SELECT * FROM account");
    $exists = true;
    while ($donnees = $reponse->fetch()){
        if ($donnees["email"] == $email){
            $exists=true;
            break;
        }
        else 
            $exists=false;
    }

    // if the email doesn't exists we create the account
    if (!$exists){
    // Insert into the table
    $sql = "INSERT INTO Account (nom, prenom, genre, datens, CP, ville, adresse, email, mot_de_passe)
            VALUES (:name, :fname, :gender, :dataNS, :cp, :city, :adress, :email, :password)";
    $stmt = $connexion->prepare($sql);
    
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':dataNS', $dataNS);
    $stmt->bindParam(':cp', $cp);
    $stmt->bindParam(':city', $city);
    $stmt->bindParam(':adress', $adress);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);

    // Execute and confirm account creation
    if ($stmt->execute()) {
        echo "Account has been created successfully!";
    } else {
        echo "Failed to create account.";
    }
    }else
        echo "an account already exists with same @ email";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
