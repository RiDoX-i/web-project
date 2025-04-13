<?php 

session_start();

/* We should not have access to this file unless the user has already logged in */

$serveur = 'localhost';
$login = 'root';
$pass = '';
$dataBaseName = "Sportify_data_base";

try {
    $connexion = new PDO("mysql:host=$serveur;dbname=$dataBaseName", $login, $pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $_SESSION["cour_reservé"] = "Yoga"; 
    require("../already subscribed.php");

    if ($_SESSION['remaining_places_yoga'] != 0) { // Check if there are available places
        if (!$_SESSION['is_subscribed']) { // User not already subscribed
            // Can register
            $_SESSION["registration_success_max_member"] = true;
            $currentDate = date('Y-m-d');
            
            $id_user = $_SESSION['id_user'];
            $lvl = $_POST['lvl'];
            $currentDate = $connexion->quote($currentDate);
            $lvl = $connexion->quote($lvl);

            // Prepared statement to insert into the database
            $sql = "INSERT INTO yoga_res (id_user, lvl, date_reservation) VALUES ('$id_user', $lvl, $currentDate)";
            $connexion->exec($sql);
    
            // Used in the recap page to inform which sport is taken
            $_SESSION['date_res'] = $currentDate;
            $_SESSION['lvl'] = $lvl;
    
            header("Location: http://localhost/web-project/recap/recap.php");
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
