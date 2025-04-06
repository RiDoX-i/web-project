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
    
    $_SESSION["cour_reservé"] = "Fitness"; 
    require("../already subscribed.php"); // Check if user is already subscribed to the course

    if ($_SESSION['remaining_places_fitness'] != 0) {
        if (!$_SESSION['is_subscribed']) { // User not already subscribed

            $currentDate = date('Y-m-d');
            
            // Using real_escape_string to prevent SQL injection
            $id_user = $_SESSION['id_user'];
            $currentDate = $connexion->quote($currentDate);  // Escape the date

            $sql = "INSERT INTO fitness_res (id_user, date_reservation) VALUES ('$id_user', $currentDate)";
            $connexion->exec($sql);

            // Set session variables for the recap page
            $_SESSION['date_res'] = $currentDate;

            $_SESSION["registration_success_max_member"] = true;
            header("Location: http://localhost/web-project/activities/recap/recap.php");
        } else { // User already registered to the course
            header("Location: http://localhost/web-project/activities/activities.php");
        }
    } else { // Max participants reached
        $_SESSION["registration_success_max_member"] = false;
        header("Location: http://localhost/web-project/activities/activities.php");
    }

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
