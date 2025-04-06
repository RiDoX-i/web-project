<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $surname = htmlspecialchars($_POST['surname']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Email de destination (celui de l'administrateur)
    $to = "thiernooury433@gmail.com"; // ← change ça par ton adresse email

    $subject = "Nouveau message de contact - Sportify";

    // Corps du message
    $body = "
    Nouveau message reçu depuis le formulaire de contact :

    Nom : $name $surname
    Email : $email

    Message :
    $message
    ";

    // Entêtes
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $headers .= "From: $email\r\n";

    // Envoi
    if (mail($to, $subject, $body, $headers)) {
        // Affiche une alerte JS si ça a marché
        echo "<script>alert('Votre message a été envoyé avec succès.'); window.history.back();</script>";
    } else {
        // Alerte en cas d’erreur
        echo "<script>alert('Erreur lors de l\'envoi. Veuillez réessayer.'); window.history.back();</script>";
    }
    header("Location: http://localhost/web-project/main-menu/home.php");
}
?>
