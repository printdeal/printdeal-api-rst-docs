.. _cancelling_an_order:

Cancelling an order
===================

To cancel an order, send a ``DELETE`` request to ``/api/orders/{orderid}``.
The body needs to contain JSON data with the corresponding reason. For example:

  .. code-block:: JSON
   :linenos:

    {
      "reason" : "Insert reason here"
    }

The response, if successfully will be a JSON object with the following data:

  .. code-block:: JSON
   :linenos:

    {
      "success": true
    }

Your order can be cancelled as long as the order is not yet in production.
If you can no longer cancel your order, you will receive a ``500 Internal Server Error``
that contains the message ``Cancel order failed``.

***************
Example request
***************

The following PHP code can be used to cancel an order.
Make sure you replace the values ``YOUR_USER_ID_HERE`` and ``YOUR_SECRET_HERE``
with the User-ID and secret you received on the API-credentials page.

Make sure to replace ``ORDERID`` with the id of the order you would like to cancel,
and ``REASON`` with the reason of the cancellation.

.. literalinclude:: ../code_examples/Orders/Cancelling_an_order_example.php
   :language: PHP
   :linenos:
