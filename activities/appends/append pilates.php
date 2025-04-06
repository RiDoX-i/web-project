<?php 

session_start();

/* We should not have access to this file unless the user has already logged in */

$serveur = 'localhost';
$login = 'root';
$pass = '';
$dataBaseName = "Sportify_data_base";

try {
    // Connect to the database
    $connexion = new PDO("mysql:host=$serveur;dbname=$dataBaseName", $login, $pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $_SESSION["cour_reservé"] = "Pilates"; 
    require("../already subscribed.php");

    if ($_SESSION['remaining_places_pilates'] != 0){
        if (!$_SESSION['is_subscribed']) { // User not already subscribed

            $_SESSION["registration_success_max_member"] = true;

            $currentDate = date('Y-m-d');
            $lvl = $_POST['lvl']; // Get the level from POST data and ensure it's safe

            // Escape input data to avoid SQL injection
            $id_user = $_SESSION['id_user'];
            $lvl = $connexion->quote($lvl);
            $currentDate = $connexion->quote($currentDate);

            $sql = "INSERT INTO pilates_res (id_user, lvl, date_reservation) VALUES ('$id_user', $lvl, $currentDate)";
            $connexion->exec($sql);

            // These will be used in the recap page 
            $_SESSION['date_res'] = $currentDate;
            $_SESSION['lvl'] = $_POST['lvl'];
    
            header("Location: http://localhost/web-project/activities/recap/recap.php");
        } else { // User already registered for the course
            header("Location: http://localhost/web-project/activities/activities.php");
        }
    } else { // Max participants reached
        $_SESSION["registration_success_max_member"] = false;
        header("Location: http://localhost/web-project/activities/activities.php");
    }

} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
