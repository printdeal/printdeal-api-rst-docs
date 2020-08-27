Validate product and retrieve price
===================================

To make sure you have an order-able product, you can validate the attributes and values. Send the attributes and values in a ``POST`` request to ``/api/products/{sku}``.

If you can order your product, you will receive the following data: ``price`` and ``delivery days``

**Small note, the delivery days are working days, so holidays and weekends needs to be added to get the actual date.**

If the product is invalid, you will retrieve a 400 status code.

The following request can be used as an example:

.. literalinclude:: ../code_examples/Products/validation.json
   :language: JSON
   :linenos:

***************
Example request
***************

The following PHP code can be used to validate a product and receive the price. Make sure you replace the values ``YOUR_USER_ID_HERE`` and ``YOUR_SECRET_HERE`` with the User-ID and secret you received on the API-credentials page.

.. literalinclude:: ../code_examples/Products/validation.php
   :language: PHP
   :linenos: