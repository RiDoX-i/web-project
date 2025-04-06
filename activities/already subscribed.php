<?php
// this file will just check if the user has already been logged in to the program
$exists = false;

switch ($_SESSION["cour_reservé"]) {
    case "Yoga":
        $reponse = $connexion->query("SELECT * FROM yoga_res");
        while ($donnees = $reponse->fetch()) {
            if ($donnees['id_user'] == $_SESSION['id_user']) {
                $exists = true; // user already subscribed to the program
                break;
            }
        }
        $_SESSION["is_subscribed"] = $exists; // true if already subscribed
        break;

    case "Pilates":
        $reponse = $connexion->query("SELECT * FROM pilates_res");
        while ($donnees = $reponse->fetch()) {
            if ($donnees['id_user'] == $_SESSION['id_user']) {
                $exists = true; // user already subscribed to the program
                break;
            }
        }
        $_SESSION["is_subscribed"] = $exists; // true if already subscribed
        break;

    case "Renforcement musculaire":
        $reponse = $connexion->query("SELECT * FROM musculation_res");
        while ($donnees = $reponse->fetch()) {
            if ($donnees['id_user'] == $_SESSION['id_user']) {
                $exists = true; // user already subscribed to the program
                break;
            }
        }
        $_SESSION["is_subscribed"] = $exists; // true if already subscribed
        break;

    case "Fitness":
        $reponse = $connexion->query("SELECT * FROM fitness_res");
        while ($donnees = $reponse->fetch()) {
            if ($donnees['id_user'] == $_SESSION['id_user']) {
                $exists = true; // user already subscribed to the program
                break;
            }
        }
        $_SESSION["is_subscribed"] = $exists; // true if already subscribed
        break;

    case "Cycling":
        $reponse = $connexion->query("SELECT * FROM cycling_res");
        while ($donnees = $reponse->fetch()) {
            if ($donnees['id_user'] == $_SESSION['id_user']) {
                $exists = true; // user already subscribed to the program
                break;
            }
        }
        $_SESSION["is_subscribed"] = $exists; // true if already subscribed
        break;
}
?>
