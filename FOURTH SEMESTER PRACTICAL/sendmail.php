<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php';

$mail = new PHPMailer(true);

try {

    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'example123@gmail.com';      
    $mail->Password   = 'HelloDon'tUseIt@123&'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->setFrom('example123@gmail.com', 'Rajan Poudel');
    $mail->addAddress('example456@gmail.com', 'Raajan Works');
    $mail->addReplyTo('example123@gmail.com', 'Rajan Poudel');

    $mail->isHTML(true);
    $mail->Subject = 'Test Email from PHPMailer';
    $mail->Body    = '
        <h2>Hello!</h2>
        <p>This email was sent using <b>PHPMailer</b> and Gmail SMTP.</p>
    ';
    $mail->AltBody = 'Hello! This email was sent using PHPMailer and Gmail SMTP.';

    $mail->send();
    echo "Email sent successfully!";

} catch (Exception $e) {
    echo "Email failed: {$mail->ErrorInfo}";
}

?>
