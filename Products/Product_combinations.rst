Product combinations
====================

To know which combinations are available for each category, you can send a ``GET`` request to ``/api/products/{sku}/combinations``.

This will give you a response like:

.. literalinclude:: ../code_examples/Products/combination-list.json
   :language: JSON
   :linenos:

The attribute and values in ``product`` can be used to create your order. The pricing is our default price, excluding any discounts.

If you receive an empty response, the category contains free input. You need to provide values for e.g. width and height yourself. The :ref:`available attributes and values endpoint<attribute/values_from_a_category>` can provide you more information.

Note: The response can vary from a few kilobytes to a few megabytes, and for a few exceptions more than 100 megabyte. Make sure you store this information to prevent having to retrieve this information for every request.

***************
Example request
***************

The following PHP code can be used to retrieve the possible combinations of a category. Make sure you replace the values ``YOUR_USER_ID_HERE`` and ``YOUR_SECRET_HERE`` with the User-ID and secret you received on the API-credentials page.

.. literalinclude:: ../code_examples/Products/combinations.php
   :language: PHP
   :linenos: