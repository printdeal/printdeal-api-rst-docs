.. _retrieving_order_information:

Retrieving order information
============================

To retrieve order information, send a ``GET`` request to ``/api/orders/{orderId}`` or ``/api/orders/{orderUuid}``.
The response will be a JSON object with order information.

**Note that this information is slightly different from the way you send it to create the order:**

.. literalinclude:: ../code_examples/Orders/retrieving_order_information_data_format.json
   :language: JSON
   :linenos:

*********************
VAT amounts and total
*********************

Each orderline contains a vatAmount field with the VAT for that product. There is also a vatAmount field for the entire order. This total VAT amount also includes VAT for shipping costs and payment costs. This is why the value is different from the sum of VAT per order line. Please note that this total VAT amount is calculated after customer discounts have been subtracted, if applicable.

The total field contains the total amount for the order, including VAT, payment costs, shipping costs, customer discounts and coupons if used.

*********************
Customer Discount
*********************

Each orderline contains a customer discount field which will show how much discount is applied on order line. In case of customer discount is not present then it will be null.

How it gets calculated -

For example orderLine price is 100 and vatAmount is 21 as per 21% vatAmountPercentage.

So if customer have 7% of discount then customerDiscount will show discountAmount & discountAmountTax.

discountAmount will be 7 on price so final price will be 93. (100 - 7 = 93)

discountAmountTax will be 1.47 on vatAmount so final vatAmount will be 19.53. (21 - 1.47 = 19.53)

****************
Order has failed
****************

The Printdeal API was updated at 21 December 2018 around 13:00, after this time,
when an order creation failed, you now receive an 404 result, with an error message that the order creation has failed.
Orders that failed before this date and time will have a 404 not found response.

************************************************
Example request for retrieving order information
************************************************

The following PHP code can be used for retrieve order information.
Make sure you replace the values ``YOUR_USER_ID_HERE`` and ``YOUR_SECRET_HERE`` with the User-ID and secret you
received on the API-credentials page, and{orderId} with the corresponding ``orderId`` or ``orderUuid``.


.. literalinclude:: ../code_examples/Orders/retrieving_order_information_example.php
   :language: PHP
   :linenos:
