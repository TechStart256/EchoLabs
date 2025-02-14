<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Load PHPMailer (Ensure you've installed it via Composer)

$mail = new PHPMailer(true);

try {
    // SMTP settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP host
    $mail->SMTPAuth = true;
    $mail->Username = 'tech.start256@gmail.com'; 
    $mail->Password = 'mddr yytf gjui xxmt'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Use SSL if required
    $mail->Port = 465; // Use 465 for SSL

} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
?>

