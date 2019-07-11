.. _creating_order:

Creating order
==============

.. toctree::
   :titlesonly:
   :hidden:

   Creating_order/Delivery_methods
   Creating_order/Addresses
   Creating_order/External_ID

You can create an order by sending the order information in JSON as a ``POST`` request to ``/api/orders``.

The following can be used as an example to create an order:

.. literalinclude:: ../code_examples/Orders/Creating_order/Create_order.json
   :language: JSON
   :linenos:

The response will be a JSON object with the order UUID that can be used to retrieve information from the order:

.. code-block:: JSON
   :linenos:

    {
        "uuid": "fea079fc-2f77-4223-9d5f-10254bb48717"
    }

*******
Payment
*******

The payment method for this order is on account. You will receive the invoice by email.

***************
Required fields
***************

.. csv-table::
   :header: "Field", "Type", "Description"
   :widths: 30,10,60

   "``orderLines``","``Array``","Array with orderlines"
   "``orderLines`` > ``productCode``","``String``","The code of the requested product"
   "``orderLines`` > ``files``","``Array``","Array with one file, due too technical limitations its currently not possible to supply multiple files per orderline"
   "``orderLines`` > ``files`` > ``url``","``String``","URL of a PDF file."
   "``invoiceAddress``","``Object``","Object of the invoice address. :ref:`See Addresses for more information.<addresses>`"
   "``deliveryAddress``","``Object``","Object of the delivery address. :ref:`See Addresses for more information.<addresses>`"
   "``deliveryMethod``","``Integer``","ID of the delivery method. :ref:`See Delivery methods for more information.<delivery_methods>`"

***************
Optional fields
***************

.. csv-table::
   :header: "Field", "Type", "Description"
   :widths: 30,10,60

   "``reference``","``String``","Your reference"
   "``poNumber`` > ``productCode``","``String``","Your purchase-order number"
   "``orderLines`` > ``externalId``","``String``","The external ID you want to pass"
   "``note``", "``String``", "A custom message you can add to the order. Please note that your order will remain in a ‘hold’ state, until our customer service department has reviewed your message. Max length: 255 chars."

****************
Order has failed
****************

The Printdeal API was updated at 21 December 2018 around 13:00, after this time, when an order creation failed and you retrieve the order, you now receive an 404 result, with an error message that the order creation has failed. Orders that failed before this date and time will have a 404 not found response.

.. literalinclude:: ../code_examples/Orders/Creating_order/Create_order_example.php
   :language: PHP
   :linenos:

****************************
Example request create order
****************************
The following PHP code can be used to create an order. Make sure you replace the values ``YOUR_USER_ID_HERE`` and ``YOUR_SECRET_HERE`` with the User-ID and secret you received on the API-credentials page.

.. literalinclude:: ../code_examples/Orders/Creating_order/Create_order_example.php
   :language: PHP
   :linenos: