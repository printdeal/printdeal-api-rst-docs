<?php
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.printdeal.com/api/orders",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => '{
      "orderLines": [
        {
          "sku": "06fa88a1-18e3-42fc-bef7-21c0b2d44196",
          "attributes": [
            {
              "attribute": "format",
              "value": "A4"
            },
            {
              "attribute": "material",
              "value": "woodfree coated mat mc"
            },
            {
              "attribute": "weight",
              "value": "170 grs"
            },
            {
              "attribute": "printing colors",
              "value": "4/0 full color"
            },
            {
              "attribute": "printing process",
              "value": "full color offset"
            },
            {
              "attribute": "quantity",
              "value": "10000"
            },
            {
              "attribute": "delivery time",
              "value": "normal"
            },
            {
              "attribute": "finishing options",
              "value": "without luxury finishing"
            },
            {
              "attribute": "punchholes",
              "value": "2 punchholes"
            },
            {
              "attribute": "bundling",
              "value": "bundling per 250"
            }
          ],
          "files": [
            {
              "url": "https://s3-eu-west-1.amazonaws.com/printdealcdn/content_service/informatiesheet_cold-foil.pdf"
            }
          ]
        },
        {
          "sku": "dab96802-727c-4743-836d-8de5d8d7c60a",
          "attributes": [
            {
              "attribute": "printing process",
              "value": "unprinted"
            },
            {
              "attribute": "quantity",
              "value": "1"
            },
            {
              "attribute": "delivery time",
              "value": "normal"
            },
            {
              "attribute": "accessories",
              "value": "squeegee (rakel)"
            }
          ]
        }
      ],
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