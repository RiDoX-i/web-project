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
    
    $_SESSION["cour_reservé"] = "Cycling"; 
    require("../already subscribed.php");

    if ($_SESSION['remaining_places_cycling'] != 0) { // Check if places are available
        if (!$_SESSION['is_subscribed']) { // User not already subscribed
            // Can register
            $_SESSION["registration_success_max_member"] = true;
            $currentDate = date('Y-m-d');
            
            // Escape the variables to prevent SQL injection
            $id_user = $_SESSION['id_user'];
            $currentDate = $connexion->quote($currentDate);
            
            $sql = "INSERT INTO cycling_res (id_user, date_reservation) VALUES ('$id_user', $currentDate)";
            $connexion->exec($sql);

            // These will be used in the recap page 
            $_SESSION['date_res'] = $currentDate;
            header("Location: http://localhost/web-project/recap/recap.php");
        } else { // User already registered for the course
            header("Location: http://localhost/web-project/activities/activities.php");
        }
    } else { // Max participants has been reached
        $_SESSION["registration_success_max_member"] = false;
        header("Location: http://localhost/web-project/activities/activities.php");
    }

} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
