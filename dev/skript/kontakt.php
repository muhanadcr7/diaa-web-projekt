<?php
$successMessage = "";
$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formulardaten auslesen
    $nachname = htmlspecialchars($_POST["nachname"]);
    $vorname  = htmlspecialchars($_POST["vorname"]);
    $status   = htmlspecialchars($_POST["status"]);
    $email    = htmlspecialchars($_POST["email"]);
    $nachricht = htmlspecialchars($_POST["nachricht"]);

    // Empfänger definieren
    $empfaenger = "dsj@deutsche-syrische-juristen.de";
    $betreff = "Neue Kontaktanfrage von $vorname $nachname";

    // Nachricht zusammenstellen
    $body = "Name: $vorname $nachname\n";
    $body .= "Status: $status\n";
    $body .= "E-Mail: $email\n\n";
    $body .= "Nachricht:\n$nachricht\n";

    $header = "From: $email\r\n";
    $header .= "Reply-To: $email\r\n";

    // E-Mail senden
    if (mail($empfaenger, $betreff, $body, $header)) {
        $successMessage = "Danke! Ihre Nachricht wurde erfolgreich gesendet.";
    } else {
        $errorMessage = "Fehler beim Senden der Nachricht. Bitte versuchen Sie es später.";
    }
}
?>
