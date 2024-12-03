<?php
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.printdeal.com/api/orders",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => '{
      "orderLines": [
        {
          "quoteLineItemId": "6ca49923-79ba-4513-b0f3-f84517bfa6a4",
          "files": [
            {
              "url": "https://s3-eu-west-1.amazonaws.com/printdealcdn/content_service/informatiesheet_cold-foil.pdf"
            }
          ]
        },
        {
          "quoteLineItemId": "4ca49923-79ba-4513-b0f3-f84517bfa6a4",
          "files": [
            {
              "url": "https://s3-eu-west-1.amazonaws.com/printdealcdn/content_service/informatiesheet_cold-foil.pdf"
            }
          ]
        }
      ],
      "quoteId": "1ca49923-79ba-4513-b0f3-f84517bfa6a4",
      "invoiceAddress": {
        "company":"Bedrijfsnaam",
        "firstName":"Voornaam",
        "lastName":"Achternaam",
        "email":"Voornaam@gmail.com",
        "street": "Dorpsstraat",
        "housenumber": "123",
        "zipcode": "1234AB",
        "city": "Dorp",
        "country": "nl"
      },
      "deliveryAddress": {
        "company":"Bedrijfsnaam",
        "firstName":"Voornaam",
        "lastName":"Achternaam",
        "street": "Dorpsstraat",
        "housenumber": "123",
        "housenumberAddition": "A",
        "zipcode": "1234AB",
        "city": "Dorp",
        "country": "nl"
      },
      "deliveryMethod": 1,
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