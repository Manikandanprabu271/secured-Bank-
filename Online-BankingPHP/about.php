<?php
$to      = 'recipient@example.com';   // Receiver's email
$subject = 'Test Mail from PHP';     // Subject of the email
$message = 'Hello! This is a test email sent from PHP script.';  // Message
$headers = 'From: your_email@example.com' . "\r\n" .
           'Reply-To: your_email@example.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Failed to send email.";
}
?>
