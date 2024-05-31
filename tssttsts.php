<?php
// Define the bot token and chat ID
$botToken = 'YOUR_BOT_TOKEN_HERE';
$chatId = 'YOUR_CHAT_ID_HERE';

// Define the message
$message = "Bot Activated";

// Function to send a message
function sendMessage($botToken, $chatId, $message) {
    $url = "https://api.telegram.org/bot$botToken/sendMessage";
    $postFields = array(
        'chat_id' => $chatId,
        'text' => $message
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}

// Call the function to send the message
$response = sendMessage($botToken, $chatId, $message);
echo $response;
?>
