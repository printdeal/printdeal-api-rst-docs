.. _orders:

Orders
======

.. toctree::
   :hidden:

   Orders/Creating_order
   Orders/Retrieving_your_orders
   Orders/Retrieving_order_information
   Orders/Changing_orders
   Orders/Cancelling_an_order

You can use regular HTTP methods to communicate with the API about orders:

- A ``GET`` request to ``/api/orders`` will return you a summary of your orders.
    See :ref:`retrieving your orders<retrieving_your_orders>` for more information.

- A ``GET`` request to ``/api/orders/{orderId}`` will give you the order information.
    See :ref:`retrieving order information<retrieving_order_information>` for more information.
    
- A ``POST`` request to ``/api/orders`` will allow you to create a new order.
    See :ref:`creating order<creating_order>` for more information.

- A ``POST`` or ``PUT`` request to ``/api/orders/{orderId}`` enables you to change an existing order.
    See :ref:`changing orders<changing_orders>` for more information.

- Sending a ``DELETE`` request to ``/api/orders/{orderId}`` allows you to cancel an existing order.
    See :ref:`cancelling an order<cancelling_an_order>`. for more information.
    