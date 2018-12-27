Product combinations
====================

To know which combinations are available for each category, you can send a ``GET`` request to ``/api/products/{sku}/combinations``.

This will give you a response like:

  .. code-block:: JSON
   :linenos:

   [
     {
       "product": {
         "information": {
           "deliveryDays": "7"
         },
         "attributes": [
           {
             "attribute": "printing colors",
             "value": "1\/0 PMS"
           },
           {
             "attribute": "quantity",
             "value": "250"
           },
           {
             "attribute": "delivery time",
             "value": "normal"
           },
           {
             "attribute": "colour options",
             "value": "light blue"
           },
           {
             "attribute": "printing process",
             "value": "screenprint transfer"
           },
           {
             "attribute": "type of cap",
             "value": "cap basic"
           }
         ],
         "price": 452.5
       }
     },
     {
       "product": {
         "information": {
           "deliveryDays": "7"
         },
         "attributes": [
           {
             "attribute": "printing colors",
             "value": "1\/0 PMS"
           },
           {
             "attribute": "quantity",
             "value": "250"
           },
           {
             "attribute": "delivery time",
             "value": "normal"
           },
           {
             "attribute": "colour options",
             "value": "white"
           },
           {
             "attribute": "printing process",
             "value": "screenprint transfer"
           },
           {
             "attribute": "type of cap",
             "value": "cap basic"
           }
         ],
         "price": 452.5
       }
     },
     {
       "product": {
         "information": {
           "deliveryDays": "7"
         },
         "attributes": [
           {
             "attribute": "printing colors",
             "value": "1\/0 PMS"
           },
           {
             "attribute": "quantity",
             "value": "250"
           },
           {
             "attribute": "delivery time",
             "value": "normal"
           },
           {
             "attribute": "colour options",
             "value": "red"
           },
           {
             "attribute": "printing process",
             "value": "screenprint transfer"
           },
           {
             "attribute": "type of cap",
             "value": "cap basic"
           }
         ],
         "price": 452.5
       }
     }
   ]

The attribute and values in ``product`` can be used to create your order. The pricing is our default price, excluding any discounts.

If you receive an empty response, the category contains free input. You need to provide values for e.g. width and height yourself. The :ref:`available attributes and values endpoint<attribute/values_from_a_category>` can provide you more information.

Note: The response can vary from a few kilobytes to a few megabytes, and for a few exceptions more than 100 megabyte. Make sure you store this information to prevent having to retrieve this information for every request.

***************
Example request
***************

The following PHP code can be used to retrieve the possible combinations of a category. Make sure you replace the values ``YOUR_USER_ID_HERE`` and ``YOUR_SECRET_HERE`` with the User-ID and secret you received on the API-credentials page.

  .. code-block:: php
   :linenos:

    <?php

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.printdeal.com/api/products/0d1fce7e-245d-47fb-98bf-bea07f3ad16e/combinations",
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