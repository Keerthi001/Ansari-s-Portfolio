<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp-relay.brevo.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'iamayyubansari@gmail.com';
    $mail->Password = 'tEVLnyhZI23wO8q1';
    $mail->SMTPSecure = 'tls';

    //Recipients
    $mail->setFrom('iamayyubansari@gmail.com', 'Your Name');
    $mail->addAddress('recipient@example.com', 'Recipient Name');

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Test Email via Brevo';
    $mail->Body = 'This is a test email sent via Brevo SMTP';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
