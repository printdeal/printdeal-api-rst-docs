.. _retrieving_your_orders:

Retrieving your orders
======================

.. toctree::
   :hidden:

   Retrieving_your_orders/Order_status

To receive a overview of your orders, you can send a ``GET`` request to ``/api/orders``.
Your response will look something like:

.. literalinclude:: ../code_examples/Orders/Retrieving_your_orders/retrieving_your_orders.json
   :language: JSON
   :linenos:

The id field can be used to retrieve more information about an order.
You can do this by sending a ``GET`` request to ``/api/orders/{id}``.

By default, you will get max. 50 results back. This can be used to create a paginated overview.
If you want less results, you can add the parameter limit to your query string.
Keep in mind that the maximum results is 50.
You should store some data on your side to prevent retrieving all order information each time you need the overview.

For the paginated overview, you can also use the parameter offset to specify the orders that you want to see on the page.
E.g., for page 1, you send the offset with the value 0 (or you omit this parameter),for page 2,
you send ``50``, for page 3 ``100``, etc. Finally you will receive an empty result set so you know you have reached the end.

The status parameter can be used to filter to show only a specific status.
All available statusses can be found on the :ref:`order status page<order_status>`.

*************************************
Example request for retrieving orders
*************************************

The following PHP code can be used for retrieve order information. Make sure you replace the values ``YOUR_USER_ID_HERE`` and ``YOUR_SECRET_HERE`` with the User-ID and secret you received on the API-credentials page, and{orderId} with the corresponding ``orderId`` or ``orderUuid``.


.. literalinclude:: ../code_examples/Orders/Retrieving_your_orders/retrieving_your_orders_example.php
   :language: PHP
   :linenos:
