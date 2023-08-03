<?php

require 'config/database.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPmailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST['submit'])) {
    $mail = new PHPMailer(true);

    $mail->SMTPDebug = 'SMTP::DEBUG_CONNECTION';
    $mail -> isSMTP();
    $mail -> Host = 'smtp.gmail.com';
    $mail -> SMTPAuth = true;
    $mail -> Username = 'makeitpossible2002@gmail.com';
    $mail -> Password = 'ogzdkvblebbmeixw';
    $mail -> SMTPSecure = 'ssl';
    $mail -> Port = 456;

    $mail -> setFrom('makeitpossible2002@gmail.com');

    $mail -> addAddress($_POST['email']);

    $mail -> isHTML(true);

    $mail -> Subject = $_POST['name'];
    $mail -> Body = $_POST['message'];

    $mail -> send();

    //echo
   // "
    //<script>
    //alert('Your Mail has been sent Successfully');
    //document.location.href = 'contact.php';
    //</script>

    //";
    header('location: ' . ROOT_URL . 'contact.php');
}