<?php 

$serveur = 'localhost';
$login = 'root';
$pass = '';
$dataBaseName = "Sportify_data_base";

try {
    // Connect to the database
    $connexion = new PDO("mysql:host=$serveur;dbname=$dataBaseName", $login, $pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // getting the number of places remaining for all the sports 
    //yoga
    $sql = $connexion->query("SELECT COUNT(*) AS number_of_places_taken FROM yoga_res");
    $number_of_res = $sql->fetch();
    $_SESSION['remaining_places_yoga'] =$_SESSION['max_member_yoga'] - $number_of_res["number_of_places_taken"];

    //pilates
    $sql = $connexion->query("SELECT COUNT(*) AS number_of_places_taken FROM pilates_res");
    $number_of_res = $sql->fetch();
    $_SESSION['remaining_places_pilates'] =$_SESSION['max_member_pilates'] - $number_of_res["number_of_places_taken"];
    //musculation
    $sql = $connexion->query("SELECT COUNT(*) AS number_of_places_taken FROM musculation_res");
    $number_of_res = $sql->fetch();
    $_SESSION['remaining_places_musculation'] =$_SESSION['max_member_musculation'] - $number_of_res["number_of_places_taken"];
    // fitness
    $sql = $connexion->query("SELECT COUNT(*) AS number_of_places_taken FROM fitness_res");
    $number_of_res = $sql->fetch();
    $_SESSION['remaining_places_fitness'] =$_SESSION['max_member_fitness'] - $number_of_res["number_of_places_taken"];
    // cycling
    $sql = $connexion->query("SELECT COUNT(*) AS number_of_places_taken FROM cycling_res");
    $number_of_res = $sql->fetch();
    $_SESSION['remaining_places_cycling'] =$_SESSION['max_member_cycling'] - $number_of_res["number_of_places_taken"];

} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}


?>