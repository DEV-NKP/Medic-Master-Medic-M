<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/src/Exception.php';
require_once __DIR__ . '/src/PHPMailer.php';
require_once __DIR__ . '/src/SMTP.php';


function mailer($recName,$recMail,$sub, $body )
{
$mail = new PHPMailer(true);

try {
    
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = 'raw.helpdesk@gmail.com'; 
    $mail->Password = 'raw@2020';

   
    $mail->setFrom('raw.helpdesk@gmail.com', 'Medic- M');
    $mail->addAddress($recMail, $recName);
    $mail->addReplyTo('raw.helpdesk@gmail.com', 'Medic- M'); 

    
    $mail->IsHTML(true);
    $mail->Subject = $sub;
    $mail->Body = $body;

    $mail->send();
   // echo "Email message sent.";
} 

catch (Exception $e) {
}
}

?>
