<?php

require __DIR__ . '/vendor/autoload.php';

// Twilio credentials
$accountSid = 'AC3d462d53594610c48202383ad711ee2c';
$authToken = 'c9d55c6b8520defc04e7a65230183265';

// Create a Twilio client
$twilio = new Twilio\Rest\Client($accountSid, $authToken);

// Array of recipients
$recipients = [
    'whatsapp:+917695978704', // Replace with the actual phone numbers,
];

// Message content
$message = 'Hello, this is a test message!';

// Send messages to each recipient
foreach ($recipients as $recipient) {
    $message = $twilio->messages
        ->create(
            $recipient,
            [
                'from' => 'whatsapp:+12029155907',
                'body' => $message,
            ]
        );

    echo 'Message sent to ' . $recipient . ' SID: ' . $message->sid . PHP_EOL;
}
