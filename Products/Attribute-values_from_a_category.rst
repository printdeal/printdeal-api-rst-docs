.. _attribute/values_from_a_category:

Attribute/values from a category
==========================================

To know which attributes and values are available from a category, you can send a ``GET`` request to ``/api/products/{sku}/attributes``.

This will return a response similar to:

.. literalinclude:: ../code_examples/Products/attribute-list.json
   :language: JSON
   :linenos:

To order a specific product you can retrieve the possible combinations, and create an order.

***************
Example request
***************

The following PHP code can be used to retrieve the available attributes and values. Make sure you replace the values ``YOUR_USER_ID_HERE`` and ``YOUR_SECRET_HERE`` with the User-ID and secret you received on the API-credentials page.


.. literalinclude:: ../code_examples/Products/attributes.php
   :language: PHP
   :linenos: