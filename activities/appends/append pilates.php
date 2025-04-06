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
    
    if ($_SESSION['remaining_places_pilates'] != 0){
        $_SESSION["registration_success"] = true;

    $currentDate = date('Y-m-d');
    $sql = "INSERT INTO pilates_res (id_user, lvl,date_reservation) VALUES ('$_SESSION[id_user]',  '$_POST[lvl]','$currentDate')";
    $connexion->exec($sql);

    // these will be used in the recap page 
    $_SESSION["cour_reservé"] = "Pilates"; 
    $_SESSION['date_res'] = $currentDate;
    $_SESSION['lvl']=$_POST['lvl'];
    
    header("Location: http://localhost/web-project/activities/recap/recap.php");
}else{ // max participents is reached
        $_SESSION["registration_success"] = false;
        header("Location: http://localhost/web-project/activities/activities.php");
    }

} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}




?>