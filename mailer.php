<?php

require 'PHPMailer/PHPMailerAutoload.php'; // initiate PHPMailer script
require 'PHPMailer/phpmailer.lang-pl.php'; // Polish language

    // Instantiate Class
    $mail = new PHPMailer();

    // Getting content
    $email = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['message'];

    // Set up SMTP
    $mail->IsHTML(true);
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465;

    // charset
    $mail->ChartSet = 'utf-8';

    // Authentication
    $mail->Username   = "username@gmail.com"; // Your Gmail account username
    $mail->Password   = "gmailpassword"; // Your Gmail password

    // Compose
    $body = "Imię:\n\n$name<br />Email:\n\n$email<br />Wiadomość:\n\n<br/>$message <br /><br />";
    $mail->SetFrom($_POST['email'], $_POST['name']);
    $mail->AddReplyTo($_POST['email'], $_POST['name']);
    $mail->Subject = "nowa wiadomosc z contact form";
    $mail->MsgHTML($body);

    // Send To
    $mail->AddAddress("contactform@gmail.com", "$name");

    //send the message, check for errors
    if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
    echo "Wiadomość została wysłana!";
    }
?>
