<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'C:\wamp64\www\Admin\PHPMailer\Exception.php';
require 'C:\wamp64\www\Admin\PHPMailer\PHPMailer.php';
require 'C:\wamp64\www\Admin\PHPMailer\SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 1;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.sendgrid.net';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'hamzabaazaoui';                     // SMTP username
    $mail->Password   = '07719811gg';                               // SMTP password
    $mail->SMTPSecure = 'TLS';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('hamza.baazaoui@esprit.tn', 'hamza');
    $mail->addAddress('hamza.baazaoui@esprit.tn');     // Add a recipient
                  // Name is optional

     $body='<p><strong>Hello</strong> Your claim has been refused</p>';
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Reclamation';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
