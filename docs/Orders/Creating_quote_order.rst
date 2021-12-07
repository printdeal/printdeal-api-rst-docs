.. _creating_quote_order:

Creating quote order
====================

You can create a quote order by sending the order information in JSON as a ``POST`` request to ``/api/orders``.

The following can be used as an example to create a quote order:

.. literalinclude:: ../code_examples/Orders/Creating_quote_order/Create_quote_order.json
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
   "``orderLines`` > ``quoteLineItemId``","``String``","The id of the quote lineItem"
   "``orderLines`` > ``files``","``Array``","Array with one file, due too technical limitations its currently not possible to supply multiple files per orderline"
   "``orderLines`` > ``files`` > ``url``","``String``","URL of a PDF file."
   "``quoteId``","``String``","UUID of quote"
   "``invoiceAddress``","``Object``","Object of the invoice address. :ref:`See Addresses for more information.<addresses>`"
   "``deliveryAddress``","``Object``","Object of the delivery address. :ref:`See Addresses for more information.<addresses>`"
   "``deliveryMethod``","``Integer``","ID of the delivery method. :ref:`See Delivery methods for more information.<delivery_methods>`"

***************
Optional fields
***************

.. csv-table::
   :header: "Field", "Type", "Description"
   :widths: 30,10,60

   "``reference``","``String``","Your reference. Max length: 35 chars."
   "``poNumber`` > ``productCode``","``String``","Your purchase-order number. Max length: 120 chars."
   "``orderLines`` > ``externalId``","``String``","The external ID you want to pass"
   "``testOrder``","``Boolean``","To place a test order ``true / false`` "

**********************************
Example request create quote order
**********************************
The following PHP code can be used to create a quote order. Make sure you replace the values ``YOUR_USER_ID_HERE`` and ``YOUR_SECRET_HERE`` with the User-ID and secret you received on the API-credentials page.

.. literalinclude:: ../code_examples/Orders/Creating_quote_order/Create_quote_order_example.php
   :language: PHP
   :linenos:
