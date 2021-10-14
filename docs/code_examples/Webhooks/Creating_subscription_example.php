<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://webhook.api.printdeal.com",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{
        'description': 'Subscription for events',
        'url': 'URL',
        'events': [
            'OrderCreated'
        ]
    }",
    CURLOPT_HTTPHEADER => array(
        "User-ID: YOUR_USER_ID_HERE",
        "API-Secret: YOUR_SECRET_HERE"
    )
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}
