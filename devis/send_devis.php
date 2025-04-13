<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $fname = htmlspecialchars($_POST['fname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $service = htmlspecialchars($_POST['service']);
    $handicap = htmlspecialchars($_POST['handicap']);
    $programmeType = isset($_POST['programme-type']) ? htmlspecialchars($_POST['programme-type']) : "Non précisé";
    $courseType = htmlspecialchars($_POST['course-type']);
    $sessionCount = (int)$_POST['session-count'];
    $price = (int)$_POST['price'];

    $to = $email;
    $subject = "Votre demande de devis - Sportify";

    $userBody = "
Bonjour $fname $name,

Nous avons bien reçu votre demande de devis. Voici un résumé :

Type de service : $service
Type de programme : $programmeType
Type de cours : $courseType
Nombre de sessions : $sessionCount
Handicap : $handicap

Estimation du prix : $price €

Merci de nous avoir contacté. L'équipe Sportify.
";

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $headers .= "From: contact@sportify.com\r\n";

    if (mail($to, $subject, $userBody, $headers)) {
        $adminEmail = "sportify@mail.com";
        $adminSubject = "Nouvelle demande de devis - Sportify";
        $adminMessage = "Le client $fname $name a fait une demande de devis le " . date('d/m/Y à H:i') . ".";

        mail($adminEmail, $adminSubject, $adminMessage, $headers);
        header("Location: devis.php?success=true");
        exit();
    } else {
        header("Location: devis.php?error=true");
        exit();
    }
}
?>
