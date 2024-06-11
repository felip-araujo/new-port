<?php
$token = 'EAAX18cjhv40BOZBZARVdp4VTdwy9pJZBoy2hAVqA0v2bq2wrRyx6FvjCnjEcmy85QfZCQjgJKvNQaklwSKbojrZCKqOI1TTmfj6L12h1FKQYLPNihmsj6Ca6ykFBKRnu61ehrYUq4kyIJjdN8VlgQAi65Wlk7SVZAL7TjqKgX4BcXtkQmy65SnyvKJSTTRZCDQGMydBmSJXZAuEdhHelglql';
$phoneNumberId = '+1 555 099 8429';
$recipientPhoneNumber = '+55 92 984520381';
$message = 'teste';

$url = "https://graph.facebook.com/v12.0/$phoneNumberId/messages";

$data = [
    "messaging_product" => "whatsapp",
    "to" => $recipientPhoneNumber,
    "type" => "text",
    "text" => ["body" => $message]
];

$options = [
    'http' => [
        'header'  => "Content-type: application/json\r\n" .
                     "Authorization: Bearer $token\r\n",
        'method'  => 'POST',
        'content' => json_encode($data),
    ],
];

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) {
    die('Error');
}

echo $result;
?>
