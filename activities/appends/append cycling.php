<?php 

session_start();


/* we  should not have acces to this file only if the user has already logged in */

$serveur = 'localhost';
$login = 'root';
$pass = '';
$dataBaseName = "Sportify_data_base";

try {
    // Connect to the database
    $connexion = new PDO("mysql:host=$serveur;dbname=$dataBaseName", $login, $pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SESSION['remaining_places_cycling'] != 0){
    $_SESSION["registration_success"] = true;
    $currentDate = date('Y-m-d');
    echo "".$_SESSION['id_user'];
    $sql = "INSERT INTO cycling_res (id_user, date_reservation) VALUES ('$_SESSION[id_user]', '$currentDate')";
    $connexion->exec($sql);

    header("Location: http://localhost/web-project/activities/activities.php");
}else{ // max participents has been reached
    header("Location: http://localhost/web-project/activities/activities.php");
        $_SESSION["registration_success"] = false;
    }
 
} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}




?>