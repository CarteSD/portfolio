<?php
if (
        !empty($_POST["identite"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["objet"]) &&
        !empty($_POST["message"]) &&
        null !== $_POST["checkbox"]
    ) {

    $identite = $_POST["identite"];
    $email = $_POST["email"];
    $objet = $_POST["objet"];
    $message = $_POST["message"];
    $checkbox = $_POST["checkbox"];

    // Vérification de la validité de l'identité avec REGEX contenant au moins deux mots
    if (!preg_match("/^[a-zA-Zéèàêâùïüë\s-]{2,}$/", $identite)) {
        echo "error-validite-identite";
        return;
    }

    // Vérification de la validité de l'adresse e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "error-validite-email";
        return;
    }

    $to = "edesessard@iutbayonne.univ-pau.fr";
    $subject = "Nouvelle réponse au formulaire du portfolio";
    $body = "Identité : " . $identite . "\nEmail : " . $email . "\nObjet : " . $objet . "\nMessage : " . $message;
    $headers = "From: " . $email;

    if (mail($to, $subject, $body, $headers)) {
        echo "success";
    } else {
        echo "error-envoi-email";
    }

} else {
    echo "error-saisi";
}
?>

<script src="index.js"></script>
