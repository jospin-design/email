<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Paramètres de configuration
    $to = "ostiejospin30@gmail.com";
    $subject = "Nouveau message de la part de" . $name;
    $body = "message: " . $message;

    // En-têtes de l'e-mail
    $headers = "From: " . $email . "\n";
    $headers  = "Reply-To: " . $email . "\n";

    // Envoyer l'e-mail
    if (mail($name="name", $email="email", $message="message")) {
        echo "Message envoyé avec succès.";
    } else {
        echo "Erreur lors de l'envoi du message.";
    }
}
?>