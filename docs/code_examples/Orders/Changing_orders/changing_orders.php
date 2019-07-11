<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.printdeal.com/api/orders/{orderId}",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => '{
  "invoiceAddress": {
    "name": "Naam",
    "street": "Dorpsstraat",
    "housenumber": "123",
    "zipcode": "1234AB",
    "city": "Dorp",
    "country": "nl"
  },
  "deliveryAddress": {
    "name": "Naam",
    "street": "Dorpsstraat",
    "housenumber": "123",
    "housenumberAddition": "A",
    "zipcode": "1234AB",
    "city": "Dorp",
    "country": "nl"
  },
  "deliveryMethod": 1,
  "paymentMethod": 1,
  "reference": "reference-1234",
  "poNumber": "poNumber"
}',
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