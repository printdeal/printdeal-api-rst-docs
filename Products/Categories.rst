Categories
==========

To retrieve a list of all available categories, send a ``GET`` request to ``/api/products/categories``.
Your response will look like:

  .. code-block:: JSON
   :linenos:

    [
      {
        "name": "magazines",
        "sku": "3548e67f-1d1a-44f3-8547-c982ff9ceda3"
      },
      {
        "name": "flyers",
        "sku": "008adad3-621d-4039-b57e-66b91d969122"
      },
      {
        "name": "business cards",
        "sku": "1b5c5f8d-64e8-4b4b-9698-b5b510a48973"
      },
      {
        "name": "canvas prints",
        "sku": "671df37a-bd14-41d5-aea7-afcf7ded5f59"
      },
      {
        "name": "envelopes",
        "sku": "7db2b277-4c17-4e30-9261-5b4cdf6e8f41"
      },
      {
        "name": "folders",
        "sku": "877ebcd0-5117-44ed-960b-a331d2c3deb6"
      },
      {
        "name": "large format stickers",
        "sku": "591f6180-3a3a-423f-b9af-86b54289ee93"
      },
      {
        "name": "letterhead",
        "sku": "17cba119-9f75-44e2-b410-d79b42468b35"
      },
      {
        "name": "magazines loopstitched",
        "sku": "5222ed2a-b031-40d4-8693-77698a481185"
      }
    ]

The SKU is used for communicating the type of product you want to order, or need more information about.
You can retrieve the available attributes and values or retrieve all possible combinations of a certain category.

When there are major updates to a category, or we cannot guarantee backwards compatibility of a category, the sku will change.

***************
Example request
***************

The following PHP code can be used to retrieve the available categories.
Make sure you replace the values ``YOUR_USER_ID_HERE`` and ``YOUR_SECRET_HERE``
with the User-ID and secret you received on the API-credentials page.

  .. code-block:: php
   :linenos:

    <?php

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.printdeal.com/api/products/categories",
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