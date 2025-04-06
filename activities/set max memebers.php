<?php
    $serveur = 'localhost';
    $login = 'root';
    $pass = '';
    $dataBaseName = "Sportify_data_base";
    // this file sets the $_SESSION values to the max number of members per type of sport

    try {
        
        // Connect to the database
        $connexion = new PDO("mysql:host=$serveur;dbname=$dataBaseName", $login, $pass);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Retrieve max members for each sport and set session values
        // Yoga
        $sql = $connexion->query("SELECT Max_Places FROM Max_members WHERE name_sport='Yoga'");
        $donnees = $sql->fetch();
        if ($donnees) {
            $_SESSION['max_member_yoga'] = $donnees['Max_Places'];
        }

        // Pilates
        $sql = $connexion->query("SELECT Max_Places FROM Max_members WHERE name_sport='Pilates'");
        $donnees = $sql->fetch();
        if ($donnees) {
            $_SESSION['max_member_pilates'] = $donnees['Max_Places'];
        }

        // Musculation
        $sql = $connexion->query("SELECT Max_Places FROM Max_members WHERE name_sport='Musculation'");
        $donnees = $sql->fetch();
        if ($donnees) {
            $_SESSION['max_member_musculation'] = $donnees['Max_Places'];
        }

        // Cycling
        $sql = $connexion->query("SELECT Max_Places FROM Max_members WHERE name_sport='Cycling'");
        $donnees = $sql->fetch();
        if ($donnees) {
            $_SESSION['max_member_cycling'] = $donnees['Max_Places'];
        }

        // Fitness
        $sql = $connexion->query("SELECT Max_Places FROM Max_members WHERE name_sport='Fitness'");
        $donnees = $sql->fetch();
        if ($donnees) {
            $_SESSION['max_member_fitness'] = $donnees['Max_Places'];
        }

    } catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
?>
