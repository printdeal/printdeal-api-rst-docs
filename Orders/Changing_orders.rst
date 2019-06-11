.. _changing_orders:

Changing orders
===============

To change the order, you can send the same request that you send to create the order to the endpoint ``/api/orders/{orderid}``
**Note: for updating you can also use UUID as the identifier:** ``/api/orders/{orderuuid}``

The HTTP method can be either ``POST`` or ``PUT`` and it is up to you if you want to specify only the information that you want
to change or all information, including the non-changed data.

**Please pay attention that invoiceAddress, externalId and deliveryMethod can’t be changed.**

So these JSON objects will have the same result:

  .. code-block:: JSON
   :linenos:

    {
        "deliveryAddress": {
            "name": "Naam",
            "street": "Dorpsstraat",
            "housenumber": "123",
            "housenumberAddition": "A",
            "zipcode": "1234AB",
            "city": "Dorp",
            "country": "nl"
        }
    }

  .. code-block:: JSON
   :linenos:

    {
          "invoiceAddress": {
            "name": "Drukwerkdeal B.V.",
            "street": "Keulenstraat",
            "housenumber": "4",
            "zipcode": "7418 ET",
            "city": "Deventer",
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
    }

If a field can (no longer) be modified, you will receive a ``400 Bad Request`` header in return.

********************************
Example request for change order
********************************

The following PHP code can be used to change the order. Make sure you replace the
values ``YOUR_USER_ID_HERE`` and ``YOUR_SECRET_HERE`` with the User-ID and secret you received on the API-credentials
page, and ``{orderId}`` with the corresponding orderId.

.. literalinclude:: ../code_examples/Orders/Changing_orders/changing_orders.php
   :language: PHP
   :linenos: