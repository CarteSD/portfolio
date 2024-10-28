<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require './vendor/phpmailer/phpmailer/src/PHPMailer.php';
require './vendor/phpmailer/phpmailer/src/SMTP.php';
require './vendor/phpmailer/phpmailer/src/Exception.php';

function send_mail($from_name, $from_email, $subject, $message) {
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'carteesde@gmail.com';
    $mail->Password = 'wnquwmlzvyugezws';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    $mail->setFrom($from_email, $from_name);
    $mail->addAddress('edesessard@iutbayonne.univ-pau.fr', 'Estéban DESESSARD');
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->setLanguage('fr', './vendor/phpmailer/phpmailer/language/phpmailer.lang-fr.php');

    return $mail->send();
}


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

    if (!preg_match("/^[\p{L}]+(?:[-\s][\p{L}]+)+$/u", $identite)) {
        echo "error-validite-identite";
        return;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "error-validite-email";
        return;
    }

    if (send_mail($identite, $email, $objet, $message)) {
        echo "success";
    } else {
        echo "error-envoi-email";
    }

} else {
    echo "error-saisi";
}
?>
