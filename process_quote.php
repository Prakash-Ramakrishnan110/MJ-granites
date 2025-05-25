<?php
// Enable error reporting (for development only)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Load PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer files
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

// Configuration
$companyEmail = 'mjgranitesexporters@gmail.com'; // Company email
$gmailUsername = 'mjgranitesexporters@gmail.com'; // Your Gmail
$gmailAppPassword = 'zcfn xedz azqd qfbx'; // Gmail app password
$companyName = 'MJ Granite Exporters'; // Your company name

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $company = htmlspecialchars($_POST['company'] ?? '');
    $country = htmlspecialchars($_POST['country'] ?? '');
    $product = htmlspecialchars($_POST['product'] ?? '');
    $quantity = htmlspecialchars($_POST['quantity'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');

    // Validate required fields
    if (empty($name) || empty($email) || empty($phone) || empty($country) || empty($product) || empty($quantity)) {
        die(json_encode(['success' => false, 'message' => 'Please fill all required fields']));
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die(json_encode(['success' => false, 'message' => 'Invalid email address']));
    }

    // Map product types to readable names
    $productNames = [
        'granite-slabs' => 'Granite Slabs',
        'granite-tiles' => 'Granite Tiles',
        'granite-countertops' => 'Granite Countertops',
        'custom-cut' => 'Custom Cut Granite'
    ];

    $productDisplay = $productNames[$product] ?? $product;

    try {
        // 1. Send thank you email to the contact person
        $thankYouMail = new PHPMailer(true);
        $thankYouMail->isSMTP();
        $thankYouMail->Host = 'smtp.gmail.com';
        $thankYouMail->SMTPAuth = true;
        $thankYouMail->Username = $gmailUsername;
        $thankYouMail->Password = $gmailAppPassword;
        $thankYouMail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $thankYouMail->Port = 587;

        $thankYouMail->setFrom($gmailUsername, $companyName);
        $thankYouMail->addAddress($email, $name);
        $thankYouMail->Subject = "Thank you for your granite export quote request";

        // HTML version for thank you email
        $thankYouMail->isHTML(true);
        $thankYouMail->Body = "
            <h2 style='color:#024430;'>Thank you for contacting $companyName!</h2>
            <p>Dear $name,</p>
            <p>We've received your granite export quote request and our team will get back to you within 24 hours with pricing and shipping details.</p>
            
            <h3 style='color:#024430; margin-top:20px;'>Your Quote Request Details:</h3>
            <div style='background:#f8f9fa; padding:15px; border-radius:5px;'>
                <p><strong>Destination Country:</strong> $country</p>
                <p><strong>Product Type:</strong> $productDisplay</p>
                <p><strong>Quantity:</strong> $quantity sq ft</p>
                <p><strong>Special Requirements:</strong></p>
                <p>" . nl2br($message ?: 'None') . "</p>
            </div>
            
            <p style='margin-top:20px;'>If you have any urgent inquiries, please feel free to contact us directly at <a href='mailto:$companyEmail'>$companyEmail</a> or call us at +1234567890.</p>
            
            <p>Best regards,<br>The $companyName Team</p>
        ";

        $thankYouMail->send();

        // 2. Send quote request details to company
        $companyMail = new PHPMailer(true);
        $companyMail->isSMTP();
        $companyMail->Host = 'smtp.gmail.com';
        $companyMail->SMTPAuth = true;
        $companyMail->Username = $gmailUsername;
        $companyMail->Password = $gmailAppPassword;
        $companyMail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $companyMail->Port = 587;

        $companyMail->setFrom($gmailUsername, 'Quote Request');
        $companyMail->addAddress($companyEmail, $companyName);
        $companyMail->addReplyTo($email, $name);
        $companyMail->Subject = "New Granite Export Quote Request from $name";

        // HTML version for company email
        $companyMail->isHTML(true);
        $companyMail->Body = "
            <h2 style='color:#024430;'>New Granite Export Quote Request</h2>
            <div style='background:#f8f9fa; padding:15px; border-radius:5px; margin-bottom:20px;'>
                <p><strong>Contact Name:</strong> $name</p>
                <p><strong>Email:</strong> <a href='mailto:$email'>$email</a></p>
                <p><strong>Phone:</strong> $phone</p>
                <p><strong>Company:</strong> " . ($company ? $company : 'Not provided') . "</p>
            </div>
            
            <h3 style='color:#024430;'>Export Details:</h3>
            <div style='background:#f8f9fa; padding:15px; border-radius:5px; margin-bottom:20px;'>
                <p><strong>Destination Country:</strong> $country</p>
                <p><strong>Product Type:</strong> $productDisplay</p>
                <p><strong>Quantity:</strong> $quantity sq ft</p>
                <p><strong>Special Requirements:</strong></p>
                <p>" . nl2br($message ?: 'None') . "</p>
            </div>
            
            <p>Please respond to this quote request within 24 hours.</p>
        ";

        $companyMail->send();

        echo json_encode(['success' => true, 'message' => 'Thank you! Your quote request has been submitted. We will contact you soon.']);
        exit;

    } catch (Exception $e) {
        echo json_encode(['success' => false, 'message' => 'An error occurred while sending your request. Please try again later.']);
        exit;
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit;
}
?>