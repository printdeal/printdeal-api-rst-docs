.. _attribute/values_from_a_category:

Attribute/values from a category
==========================================

To know which attributes and values are available from a category, you can send a ``GET`` request to ``/api/products/{sku}/attributes``.

This will return a response similar to:
  .. code-block:: JSON
   :linenos:

    {
      "format": [
        "A4",
        "A5"
      ],
      "material": [
        "lasergeschikt bankpost wit",
        "lasergeschikt ECO",
        "lasergeschikt biotop natural FSC",
        "lasergeschikt vergé white",
        "lasergeschikt vergé naturel"
      ],
      "weight": [
        "80 grs",
        "90 grs",
        "100 grs",
        "120 grs"
      ],
      "printing colors": [
        "1/0 PMS",
        "2/0 PMS",
        "3/0 PMS",
        "4/0 full color",
        "1/1 PMS",
        "2/2 PMS",
        "3/3 PMS",
        "4/4 full color"
      ],
      "printing process": [
        "digital",
        "full color offset",
        "PMS colors"
      ],
      "quantity": [
        "25",
        "50",
        "75",
        "100",
        "150",
        "200",
        "250",
        "500",
        "1000",
        "2000",
        "2500",
        "3000",
        "4000",
        "5000",
        "6000",
        "7500",
        "10000",
        "15000",
        "20000",
        "25000",
        "30000",
        "35000",
        "40000",
        "45000",
        "50000",
        "60000",
        "70000",
        "80000",
        "90000",
        "100000",
        "variable quantity",
        "7000",
        "8000",
        "9000"
      ],
      "delivery time": [
        "normal",
        "express",
        "overnight"
      ],
      "letterheads punchholes": [
        "2 punchholes",
        "4 punchholes",
        "no punchhole"
      ],
      "bundling": [
        "no bundling",
        "bundling per 100",
        "bundling per 250",
        "bundling per 500"
      ]
    }

To order a specific product you can retrieve the possible combinations, and create an order.

***************
Example request
***************

The following PHP code can be used to retrieve the available attributes and values. Make sure you replace the values ``YOUR_USER_ID_HERE`` and ``YOUR_SECRET_HERE`` with the User-ID and secret you received on the API-credentials page.


  .. code-block:: php
   :linenos:

    <?php

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.printdeal.com/api/products/0d1fce7e-245d-47fb-98bf-bea07f3ad16e/attributes",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "API-Secret: YOUR_SECRET_HERE",
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