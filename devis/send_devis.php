<?php
// 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars($_POST['name']); // Nom
    $fname = htmlspecialchars($_POST['fname']); // Prénom
    $email = htmlspecialchars($_POST['email']); // Email
    $phone = htmlspecialchars($_POST['phone']); // Téléphone
    $service = htmlspecialchars($_POST['service']); // Service demandé
    $handicap = htmlspecialchars($_POST['handicap']); // Handicap
    $programmeType = isset($_POST['programme-type']) ? htmlspecialchars($_POST['programme-type']) : "Non précisé"; // Type de programme
    $courseType = htmlspecialchars($_POST['course-type']); // Type de cours
    $sessionCount = (int)$_POST['session-count']; // Nombre de sessions
    $price = (int)$_POST['price']; // Estimation du prix (calculée par JavaScript et envoyée par le formulaire)

    // Corps de l'email pour l'utilisateur
    $to = $email; // L'email de l'utilisateur
    $subject = "Votre demande de devis - Sportify";
    $body = "
    Bonjour $fname $name,

    Nous avons bien reçu votre demande de devis. Voici un résumé :

    Type de service demandé : $service
    Type de programme personnalisé : $programmeType
    Type de cours : $courseType
    Nombre de sessions : $sessionCount
    Êtes-vous handicapé : $handicap

    Estimation du prix : $price €

    Merci de nous avoir contacté, nous reviendrons vers vous sous peu.

    Cordialement,
    L'équipe Sportify
    ";

    // Entêtes de l'email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8" . "\r\n";
    $headers .= "From: contact@sportify.com" . "\r\n";

    // Envoi de l'email à l'utilisateur
    if (mail($to, $subject, $body, $headers)) {
        // Si l'email a été envoyé avec succès, envoyer un email à l'administrateur aussi
        $adminEmail = "admin@sportify.com"; // Remplacer par l'email de l'administrateur
        $adminSubject = "Nouvelle demande de devis - Sportify";
        $adminBody = "
        Nouveau devis reçu :

        Nom : $fname $name
        Email : $email
        Téléphone : $phone
        Service demandé : $service
        Type de programme personnalisé : $programmeType
        Type de cours : $courseType
        Nombre de sessions : $sessionCount
        Handicap : $handicap

        Estimation du prix : $price €
        ";

        // Envoi de l'email à l'administrateur
        mail($adminEmail, $adminSubject, $adminBody, $headers);

        // Rediriger l'utilisateur vers la page de confirmation
        header("Location: confirmation.php"); // Vous pouvez créer une page "confirmation.php" pour afficher un message de succès
        exit();
    } else {
        echo "Une erreur est survenue, veuillez réessayer.";
    }
}
?>
