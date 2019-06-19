<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.printdeal.com/api/products/17cba119-9f75-44e2-b410-d79b42468b35",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => '{
	"attributes": [
		{
			"attribute": "format",
			"value": "A4"
		},
		{
			"attribute": "material",
			"value": "lasergeschikt bankpost wit"
		},
		{
			"attribute": "weight",
			"value": "80 grs"
		},
		{
			"attribute": "printing colors",
			"value": "1/0 PMS"
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
			"value": "normal"
		},
		{
			"attribute": "letterheads punchholes",
			"value": "2 punchholes"
		},
		{
			"attribute": "bundling",
			"value": "no bundling"
		}
	]
}',
  CURLOPT_HTTPHEADER => array(
    "API-Secret: YOUR_SECRET_HERE",
    "Content-Type: application/json",
    "User-ID: YOUR_USER_ID_HERE"
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