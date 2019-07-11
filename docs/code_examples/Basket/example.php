<?php
 
$curl = curl_init();
 
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.printdeal.com/api/basket/prices",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => '{
    "deliveryAddress": {
        "name": "Naam",
        "street": "Dorpsstraat",
        "housenumber": "123",
        "zipcode": "1234AB",
        "city": "Dorp",
        "country": "NL"
    },
    "products": [
        {
            "attributes": [
                {
                    "attribute": "format",
                    "value": "A4"
                },
                {
                    "attribute": "printing colors",
                    "value": "1/0 PMS"
                },
                {
                    "attribute": "material",
                    "value": "Bond Text Paper"
                },
                {
                    "attribute": "weight",
                    "value": "80 Grs"
                },
                {
                    "attribute": "printing process",
                    "value": "PMS colors"
                },
                {
                    "attribute": "quantity",
                    "value": "500"
                },
                {
                    "attribute": "delivery time",
                    "value": "Normal"
                },
                {
                    "attribute": "Punchholes",
                    "value": "2 Punchholes"
                },
                {
                    "attribute": "bundling",
                    "value": "Bundled Per 100"
                }
            ],
            "sku": "afec1c7b-18cd-47e0-8f76-31d85dbd41f0"
        },
        {
            "attributes": [
                {
                    "attribute": "format",
                    "value": "A4"
                },
                {
                    "attribute": "printing colors",
                    "value": "1/0 PMS"
                },
                {
                    "attribute": "material",
                    "value": "Bond Text Paper"
                },
                {
                    "attribute": "weight",
                    "value": "80 Grs"
                },
                {
                    "attribute": "printing process",
                    "value": "PMS colors"
                },
                {
                    "attribute": "quantity",
                    "value": "500"
                },
                {
                    "attribute": "delivery time",
                    "value": "Normal"
                },
                {
                    "attribute": "Punchholes",
                    "value": "2 Punchholes"
                },
                {
                    "attribute": "bundling",
                    "value": "Bundled Per 100"
                }
            ],
            "sku": "afec1c7b-18cd-47e0-8f76-31d85dbd41f0"
        }
    ],
    "deliveryMethod": 1
}',
  CURLOPT_HTTPHEADER => array(
    "api-secret: YOUR_SECRET_HERE",
    "cache-control: no-cache",
    "user-id: YOUR_USER_ID_HERE"
  ),
));
 
$response = curl_exec($curl);
$err = curl_error($curl);
 
curl_close($curl);
 
if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}