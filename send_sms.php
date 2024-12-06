<?php
require __DIR__ . '/vendor/autoload.php';  // Load the Twilio SDK

use Twilio\Rest\Client;

// Your Twilio credentials from the Twilio console
$account_sid = 'AC65637a406cc63a325e7b8c91d231000d';   // Twilio Account SID
$auth_token = 'b545d0f91a530fe769d780408be5bdfd';     // Twilio Auth Token
$twilio_number = '+14138932057'; // Your Twilio phone number

// The recipient's phone number and the message
$to_number = '+919505437075';  // Phone number to send SMS to
$message = 'Hello! This is a test message from PHP.';

// Create a Twilio client
$client = new Client($account_sid, $auth_token);

// Send the message
try {
    $client->messages->create(
        $to_number,   // The recipient's phone number
        [
            'from' => $twilio_number,  // Twilio phone number
            'body' => $message         // SMS message content
        ]
    );
    echo 'Message sent successfully!';
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
