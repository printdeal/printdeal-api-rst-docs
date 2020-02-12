.. _retrieving_order_information:

Retrieving order information
============================

To retrieve order information, send a ``GET`` request to ``/api/orders/{orderId}`` or ``/api/orders/{orderUuid}``.
The response will be a JSON object with order information.

**Note that this information is slightly different from the way you send it to create the order:**

.. literalinclude:: ../code_examples/Orders/retrieving_order_information_data_format.json
   :language: JSON
   :linenos:
   
**Information currently not available in V2** 
The following information is currently not available in V2:
- Shipping costs - Soon, before 31st of March 
- Shipment info / track and trace url: - Soon, befor 31st of March  

*********************
VAT amounts and total
*********************

Each orderline contains a vatAmount field with the VAT for that product. There is also a vatAmount field for the entire order. This total VAT amount also includes VAT for shipping costs and payment costs. This is why the value is different from the sum of VAT per order line. Please note that this total VAT amount is calculated after customer discounts have been subtracted, if applicable.

The total field contains the total amount for the order, including VAT, payment costs, shipping costs, customer discounts and coupons if used.

****************
Order has failed
****************
When an order creation failed, you receive an 404 result, with an error message that the order creation has failed.

************************************************
Example request for retrieving order information
************************************************

The following PHP code can be used for retrieve order information.
Make sure you replace the values ``YOUR_USER_ID_HERE`` and ``YOUR_SECRET_HERE`` with the User-ID and secret you
received on the API-credentials page, and{orderId} with the corresponding ``orderId`` or ``orderUuid``.


.. literalinclude:: ../code_examples/Orders/retrieving_order_information_example.php
   :language: PHP
   :linenos:
