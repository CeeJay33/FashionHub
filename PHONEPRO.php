
<?php
require_once 'vendor/autoload.php'; // Load Twilio PHP library

use twilio\Rest\Client;

// Your Twilio Account SID and Auth Token
$accountSid = 'ACa8678665640a8ec699294e955345f388';
$authToken = 'ab349a5ace6d880d85a2e34aa1fe3f74';

// Create a new Twilio client
$twilio = new Client($accountSid, $authToken);

// Generate a random OTP (6-digit code)
$otp = strval(rand(100000, 999999));

// Store the OTP in a session or database for verification

// Recipient's phone number (e.g., user's input)
$toPhoneNumber = '+2348022619320'; // Replace with the recipient's phone number

try {
    // Send the OTP via SMS
    $message = $twilio->messages->create(
        $toPhoneNumber,
        [
            'from' => '+18589142671', // Your Twilio phone number
            'body' => 'Your OTP is: ' . $otp,
        ]
    );

    // You can also store the message SID for tracking purposes
    $messageSid = $message->sid;

    // Redirect to the OTP verification page
    header('Location: otp-verification.php');
    exit;
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>