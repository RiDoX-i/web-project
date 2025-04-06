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

    $currentDate = date('Y-m-d');

    $sql = "INSERT INTO yoga_res (id_user,lvl, date_reservation) VALUES ('$_SESSION[id_user]', '$_POST[lvl]','$currentDate')";
    $connexion->exec($sql);

    echo "added successfully";

  
    // at this point i should call the checker memeber max num and take the true or false value
  /*  if ($_SESSION['login_success']) {
        header("Location: http://localhost/web-project/main-menu/home.php");
    } else {
        header("Location: http://localhost/web-project/connexion/connexion.php");
    }
*/
} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}




?>