.. _validate_product:

Validate product and retrieve price
===================================

To make sure you have an order-able product, you can validate the attributes and values. Send the attributes and values in a ``POST`` request to ``/api/products/{sku}``.

If you can order your product, you will receive the following data: ``price`` and ``promised arrival date``

**Small note, the delivery days are working days, so holidays and weekends needs to be added to get the actual date.**

If the product is invalid, you will retrieve a 400 status code.

***************
Request example
***************

.. literalinclude:: ../code_examples/Products/validation.json
   :language: JSON
   
****************
Response example
****************

.. literalinclude:: ../code_examples/Products/validation_response.json
   :language: JSON

.. csv-table::
   :header: "Field", "Type", "Description"
   :widths: 30,10,60

   "``price``","``float``","Price of the product"
   "``deliveryDays``","``Int``","Deprecated, returns `0` for backwards compatibility."
   "``planoWidth``","``Int``","Deprecated, returns `0`for backwards compatibility."
   "``planoHeight``","``Int``","Deprecated, returns `0` for backwards compatibility."
   "``promisedArrivalDate``","``String|Null``","Date in the format yyyy-mm-dd. **If value returns** ``NULL`` **there went something wrong with calculating the date.**"

***************
Example request
***************

The following PHP code can be used to validate a product and receive the price. Make sure you replace the values ``YOUR_USER_ID_HERE`` and ``YOUR_SECRET_HERE`` with the User-ID and secret you received on the API-credentials page.

.. literalinclude:: ../code_examples/Products/validation.php
   :language: PHP
   