<?php
// Enable full error reporting (only for development)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Log to confirm script was reached
file_put_contents(__DIR__ . "/log.txt", "Form reached PHP\n", FILE_APPEND);

// Only proceed if POST method
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    file_put_contents("log.txt", "Form not submitted via POST\n", FILE_APPEND);
    exit("Form not submitted properly.");
}

// Load PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer files
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

// Gmail SMTP credentials
$gmailUsername = 'boopathikannan069@gmail.com';
$gmailAppPassword = 'sdyl sbwt jtzl jire'; // Use app password, not your login password

// Sanitize form data
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$company = htmlspecialchars($_POST['company']);
$destination = htmlspecialchars($_POST['destination']);
$product_interest = htmlspecialchars($_POST['product_interest']);
$message = nl2br(htmlspecialchars($_POST['message']));

// Log POST data
file_put_contents(__DIR__ . "/log.txt", print_r($_POST, true), FILE_APPEND);

$mail = new PHPMailer(true);

try {
    // SMTP server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $gmailUsername;
    $mail->Password = $gmailAppPassword;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Set email headers
    $mail->setFrom($gmailUsername, 'Mail');
    $mail->addAddress('boopathikannan069@gmail.com'); // Receiver's email

    $mail->isHTML(true);
    $mail->Subject = 'New Export Quote Request from Website';
    $mail->Body = "
        <h3>New Export Quote Submission</h3>
        <strong>Name:</strong> $name <br>
        <strong>Email:</strong> $email <br>
        <strong>Phone:</strong> $phone <br>
        <strong>Company:</strong> $company <br>
        <strong>Country of Destination:</strong> $destination <br>
        <strong>Product Interest:</strong> $product_interest <br>
        <strong>Message:</strong><br>$message
    ";

    $mail->send();
    file_put_contents(__DIR__ . "/log.txt", "Mail sent successfully\n", FILE_APPEND);
    echo "<script>alert('Message Sent Successfully'); window.location.href='index.php';</script>";

} catch (Exception $e) {
    file_put_contents(__DIR__ . "/log.txt", "Mailer Error: {$mail->ErrorInfo}\n", FILE_APPEND);
    echo "Mailer Error: {$mail->ErrorInfo}";
}
?>
